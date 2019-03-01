<?php

namespace App\Http\Controllers\Collection;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;

class UploadsController extends Controller
{
    public function create()
    {
        return view('collection.item.upload');
    }

    public function store(Request $request)
    {
        $files = $request->file('files');
        $items = [];
        foreach ($files as $file) {
            $item = new Item(['thumbnail' => $file->getFilename()]);
            $item->save();
            $items[] = $item;
        }
        return redirect(route('addCaptions', ...$items));
    }
}
