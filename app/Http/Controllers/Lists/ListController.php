<?php

namespace App\Http\Controllers\Lists;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\ListItem;
use App\Models\User;
use Illuminate\Http\Request;

class ListController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $auth_user_id = $this->user()->id;
        $user = User::where('id', $auth_user_id)->first();
        return view('lists.index', ["user" => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ListItem $listItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ListItem $listItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ListItem $listItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ListItem $listItem)
    {
        //
    }
}