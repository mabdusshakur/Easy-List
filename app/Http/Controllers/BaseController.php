<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class BaseController extends Controller
{
    /*
     * Parameter as array[]
     * $credentials = [user_name, pin_code] - Count 2
     * 1. user_name - String from client side 
     * 2. pin_code - Plain pin_code from the user
     * return array of user or error message
     */
    public function login($credentials)
    {
        // disassembling the array items
        $user_name = $credentials['user_name'];
        $pin_code = $credentials['pin_code'];

        if (!$user_name || !$pin_code) {
            return "Too Few Argument";
        }

        // checking if user name available on db or not 
        $userFound = $this->checkUserName($user_name);
        if (!$userFound) {
            $isCreated = User::create([
                'user_name' => $user_name,
                'pin_code' => $pin_code
            ]);

            if (!$isCreated)
                return "Failed to create new user account";
        }

        // retrieving the user row from db
        $user = User::where('user_name', $user_name)->get();

        // checking if the user pin_code is correct or not 
        $isPinMatch = $this->checkUserPin($pin_code, $user[0]['pin_code']);
        if (!$isPinMatch) {
            return false;
        }

        // save the user on session 
        $this->setUser($user[0]);

        return true;
    }



    /*
     * Parameter count 1
     * 1. $user_name - string
     * return boolean
     */
    public function checkUserName($user_name)
    {
        // checking if user_name exists in the (users) table 
        $isUser = User::where('user_name', $user_name)->exists();

        // if user not found return false
        if (!$isUser)
            return false;

        // if user available then return true
        return true;
    }



    /*
     * Parameter count 2
     * 1. $rawPass - Plain Text pin_code
     * 2. $hashedPass - Hashed pin_code from the Database
     * return boolean
     */
    public function checkUserPin($rawPass, $hashedPass)
    {
        // comparing the user pin_code with the db pin_code throw hash check 
        $isMatch = Hash::check($rawPass, $hashedPass);

        // if pin_code doesn't match then return false
        if (!$isMatch)
            return false;

        // pin_code matched, returning true
        return true;
    }


    /*
     * Parameter count 1 array
     * 1. $user - user array 
     * return boolean
     */
    public function setUser($user)
    {
        // put the user on session
        session()->put('user', json_encode($user));
        return true;
    }



    /*
     * return user object if exist else return false
     */
    public function user()
    {
        // get the user from session as decoded json
        $user = json_decode(session()->get('user'));

        // if not user found then return false
        if (!$user)
            return false;

        // return the user obj
        return $user;
    }



    /*
     * if session available or not always returns same
     * return true
     */
    public function logout()
    {
        session()->remove('user');
        return true;
    }
}