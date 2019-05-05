<?php

namespace App\Http\Controllers\Exhibitions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exhibitions\Exhibition;
use App\Exhibitions\Section;

class SectionMediaController extends Controller
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
    public function __invoke(Request $request, Exhibition $exhibition, Section $section) {
        //dd($section);
        return view('exhibition.section.media', [
            'section' => $section,
            'media' => $section->media()->get(),
            'exhibition' => $exhibition
        ]);
    }
}
