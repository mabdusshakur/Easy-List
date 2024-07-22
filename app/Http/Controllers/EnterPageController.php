<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnterPageRequest;
use Illuminate\Http\Request;

class EnterPageController extends BaseController
{
    function index()
    {
        return view('EnterPage');
    }

    function enter(EnterPageRequest $req)
    {
        try {
            $data = [
                'user_name' => $req->user_name,
                'pin_code' => $req->pin_code
            ];
            $res = $this->login($data);

            if ($res['status'] != true) {
                dd($res['message']);
            }

            return $this->user();

        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    function exit()
    {
        $this->logout();
        return "logout";
    }
}