<?php

namespace App\Http\Controllers\Exhibitions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exhibitions\Exhibition;
use App\Exhibitions\Section;
use App\Exhibitions\ExhibitionMedia;

class SectionThumbnailController extends Controller
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
    public function __invoke(Exhibition $exhibition, Section $section, ExhibitionMedia $media)
    {
        $section->media_id = $media->id;
        $section->save();
        return redirect(route('section.media.index', [$exhibition, $section]));
    }
}
