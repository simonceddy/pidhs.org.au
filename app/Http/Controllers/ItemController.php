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
     * Todo: Move this to image validation middleware
     *
     * @var array
     */
    protected $valid_mimetype = [
        'image/jpeg',
        'image/png',
        'image/gif'
    ];

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
        $this->middleware('html.purify')->only(['store', 'update']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Collection $collection = null)
    {
        // item form - upload image, caption, title
        // must assign to collection
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
        $data = $request->post();
        $image = $request->file('image-upload');
        $type = $image->getMimeType();
        if (!in_array($type, $this->valid_mimetype)) {
            // todo: handle errors better
            dd('error: type '.$type.' not allowed');
        }
        $img = Image::make($image);
        $img->insert(Storage::get('wm.png'))->save();
        $image->store('public/collection');

        // Thumbnail generation
        $data['thumbnail'] = $image->hashName();
        /* if ($img->height() > 200) {
            if ($img->width() < ($img->height() / 2)) {
                $img->crop(
                    $img->width(),
                    200,
                    0,
                    ((int) $img->height() / 3)
                )->save(
                    storage_path('app').'/public/collection/thumb/th_'.$data['thumbnail']
                );
                dd($img->width());
            }
        } else { */
        $img->resize(200, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save(
            storage_path('app').'/public/collection/thumb/th_'.$data['thumbnail']
        );
        /* } */

        $data['collection_id'] = $collection->id;
        $item = new Item($data);
        $item->save();
        return redirect(route('item.show', [$collection, $item]));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
