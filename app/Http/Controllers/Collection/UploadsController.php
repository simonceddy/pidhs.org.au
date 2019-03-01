<?php

namespace App\Http\Controllers\Collection;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;
use App\Collection;

class UploadsController extends Controller
{
    public function create()
    {
        return view('collection.item.upload', [
            'collections' => Collection::all(['id', 'title'])
        ]);
    }

    public function store(Request $request)
    {

        $files = $request->file('files');
        $collection = Collection::where([
            'id' => (int) $request->post('collection')
        ])->get()->first();
        $items = [];
        foreach ($files as $file) {
            $item = new Item([
                'thumbnail' => $file->getFilename(),
                'collection_id' => $collection->id
            ]);
            $item->save();
            $items[] = $item;
        }
        //dd($items);
        return redirect(route('addCaptions', $items));
    }
}
