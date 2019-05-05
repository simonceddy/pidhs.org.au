<?php

namespace App\Http\Controllers\Exhibitions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exhibitions\Exhibition;
use App\Exhibitions\ExhibitionMedia;

class ExhibitionCoverController extends Controller
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
    public function __invoke(Exhibition $exhibition, ExhibitionMedia $media)
    {
        $exhibition->media_id = $media->id;
        $exhibition->save();
        return redirect(route('exhibitions.index'));
    }
}
