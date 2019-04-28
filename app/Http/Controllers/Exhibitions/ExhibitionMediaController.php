<?php

namespace App\Http\Controllers\Exhibitions;

use App\Exhibition\ExhibitionMedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExhibitionMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Exhibition\ExhibitionMedia  $exhibitionMedia
     * @return \Illuminate\Http\Response
     */
    public function show(ExhibitionMedia $exhibitionMedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exhibition\ExhibitionMedia  $exhibitionMedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExhibitionMedia $exhibitionMedia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exhibition\ExhibitionMedia  $exhibitionMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExhibitionMedia $exhibitionMedia)
    {
        $path = 'public/exhibitions/';
        $thumb = $exhibitionMedia->thumbnail;
        if (!Storage::exists($path . $thumb)) {
            return response()->json([
                'deleted' => false,
                'error' => 'Could not locate image file'
            ]);
        }
        Storage::delete($path . $thumb);
        Storage::delete($path . 'thumb/th_' . $thumb);
        $exhibitionMedia->delete();
        return response()->json([
            'deleted' => true
        ]);
    }
}
