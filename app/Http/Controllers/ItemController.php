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
            'except' => ['index', 'show']
        ]);
        $this->middleware('html.purify')->only(['store', 'update']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // not applicable - not publically accessible
        // items are displayed by collection
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
    public function store(Request $request)
    {
        // validate file
        $data = $request->post();
        $image = $request->file('image-upload');
        $type = $image->getMimeType();
        if (!in_array($type, $this->valid_mimetype)) {
            dd('error: type '.$type.' not allowed');
        }
        $image->store('collection');
        // generate thumbnail
        $data['thumbnail'] = $image->hashName();
        $data['collection'] = 1;
        $item = new Item($data);
        $item->save();
        dd(/* $request,  */$item);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('collection.item.show', $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
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
