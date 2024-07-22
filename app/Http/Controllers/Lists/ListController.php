<?php

namespace App\Http\Controllers\Lists;

use App\Http\Controllers\BaseController;
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
        return view('index', ["items" => $user->listItems]);
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
        $created = ListItem::create([
            'title' => $request->title,
            'user_id' => $this->user()->id,
        ]);

        if (!$created)
            return redirect()->back()->with('error', 'failed to add list item');

        return redirect()->back()->with('success', 'list item added');
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
        if ($listItem->status == "pending") {
            $listItem->status = "completed";
            $listItem->save();
            return redirect()->back()->with('success', 'Status updated');
        }
        $listItem->status = "pending";
        $listItem->save();
        return redirect()->back()->with('success', 'Status updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ListItem $listItem)
    {
        if ($listItem) {
            $listItem->delete();
            return redirect()->back()->with('success', 'list item removed');
        }
        return redirect()->back()->with('error', 'list item not found');
    }
}