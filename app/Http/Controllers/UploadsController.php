<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if (!$request->ajax()) {
            return response()->setStatusCode(500, 'Invalid upload');
        }
        $file = $request->file('file');

        dump($file);
        //Storage::put('app/assets', $contents);
        return response()->json('testing');
    }
}
