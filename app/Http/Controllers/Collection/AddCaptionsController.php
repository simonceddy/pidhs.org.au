<?php

namespace App\Http\Controllers\Collection;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;

class AddCaptionsController extends Controller
{
    public function edit(Item ...$item)
    {
        dd(...$item);
        // todo return captions view
    }

    public function store(Request $request)
    {

    }
}
