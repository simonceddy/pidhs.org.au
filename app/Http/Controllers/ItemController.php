<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use App\Collection;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Helpers\ImageHelper;

class ItemController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['show']
        ]);
        $this->middleware(['html.purify', 'validate.upload'])
            ->only(['store', 'update']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Collection $collection = null)
    {
        return view('collection.item.create', ['collection' => $collection]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Collection $collection)
    {
        // validate file
        $captions = $request->post('caption');
        
        $images = $request->file('image-upload');
        //$items = [];
        foreach ($images as $key => $image) {
            $thumb = ImageHelper::storeCollectionItem($image);
            $item = new Item([
                'caption' => $captions[$key],
                'thumbnail' => $thumb
            ]);
            $item->collection()->associate($collection);
            $item->save();
            //$items[] = $item;
        }
        return redirect(route('collection.show', $collection));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Collection $collection, Item $item)
    {
        return view('collection.item.show', [
            'item' => $item,
            'collection' => $collection
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Collection $collection, Item $item)
    {
        return view('collection.item.edit', $item, [
            'collection' => $collection
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(
        Request $request,
        Collection $collection,
        Item $item
    ) {
        $item->caption = $request->post('caption');
        $item->save();
        return redirect(route('item.show', [$collection, $item]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collection $collection, Item $item)
    {
        if (Storage::exists($fn = 'public/collection/'.$item->thumbnail)) {
            // return error
        }
        $item->delete();
        Storage::delete($fn);
        return redirect(route('collection.show', $collection));
    }
}
