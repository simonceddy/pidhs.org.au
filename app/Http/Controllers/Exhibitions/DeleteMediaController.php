<?php

namespace App\Http\Controllers\Exhibitions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exhibitions\ExhibitionMedia;
use Illuminate\Support\Facades\Storage;

class DeleteMediaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, ExhibitionMedia $media)
    {
        $path = 'public/exhibitions/';
        $thumb = $media->thumbnail;
        if (Storage::exists($path . $thumb)) {
            Storage::delete($path . $thumb);
            Storage::delete($path . 'thumb/th_' . $thumb);
        } elseif (!$media->exists) {
        // todo: return to manage with error message
            return response()->json([
                'deleted' => false,
                'error' => 'Could not locate image file'
            ]);
        }        
        $exhibition = $media->exhibition()->first();
        $section = $media->section()->first();
        $media->delete();
        if (!$section) {
            return redirect(route('exhibition.media.index', [$exhibition]));
        }
        return redirect(route('section.media.index', [$exhibition, $section]));
    }
}
