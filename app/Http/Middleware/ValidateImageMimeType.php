<?php

namespace App\Http\Middleware;

use Closure;

class ValidateImageMimeType
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
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // check if an uploaded file is a valid mimetype
        $file = $request->file('image-upload');
        dd($file);
        // if not return to form with error message and post data
        return $next($request);
    }
}
