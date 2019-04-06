<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use App\Collection;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

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
        $items = [];
        foreach ($images as $key => $image) {
            $img = Image::make($image);
            $img->insert(Storage::get('wm.png'))->save();
            $image->store('public/collection');
            $thumb = $image->hashName();
            $img->heighten(200)->save(
                storage_path('app').'/public/collection/thumb/th_'.$thumb
            );
            $item = new Item([
                'collection_id' => $collection->id,
                'caption' => $captions[$key],
                'thumbnail' => $thumb
            ]);
            $item->save();
            $items[] = $item;
        }
        
        //dd($items);
        // Thumbnail generation
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
        // update item title and caption
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        // update item title and caption
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        // Remove item
        // Remove associated image + thumbnail
    }
}
