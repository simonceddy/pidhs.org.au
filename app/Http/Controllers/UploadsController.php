<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'validate.ckupload']);
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if (!$request->ajax()) {
            return response()->json([
                'uploaded' => false,
                'error' => []
            ]);
        }
        $file = $request->file('uploaded-file');

        $file->store('public/assets');
        //dump($file);
        //Storage::put('app/assets', $contents);
        return response()->json([
            'uploaded' => true,
            'url' => Storage::url('public/assets/'.$file->hashName())
        ]);
    }
}
