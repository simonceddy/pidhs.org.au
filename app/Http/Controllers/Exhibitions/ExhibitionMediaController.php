<?php

namespace App\Http\Controllers\Exhibitions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exhibitions\Exhibition;

class ExhibitionMediaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Exhibition $exhibition)
    {
        return view('exhibition.media', [
            'exhibition' => $exhibition,
            'media' => $exhibition->media()->get()
        ]);
    }
}
