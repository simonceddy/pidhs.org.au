<?php

namespace App\Http\Controllers\Collection;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;

class AddCaptionsController extends Controller
{
    public function edit(Request $request)
    {
        dd($request->query());
        // todo return captions view
    }

    public function store(Request $request)
    {

    }
}
