<?php

namespace App\Http\Controllers\Collection;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;

class AddCaptionsController extends Controller
{
    public function edit(Request $request)
    {
        $ids = array_keys($request->query());
        $items = Item::where('id', $ids)->get();
        dd($items);
        // todo return captions view
    }

    public function store(Request $request)
    {

    }
}
