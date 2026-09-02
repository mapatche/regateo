<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return view('items.index');
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(Item $item)
    {
        return view('items.edit');
    }

    public function update(Request $request, Item $item)
    {
        //
    }

    public function destroy(Item $item)
    {
        //
    }
}
