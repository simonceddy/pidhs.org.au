<?php

namespace App\Http\Middleware;

use Closure;

class ValidateUploadedFile
{
    /**
     * Accepted mimetypes
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
        $files = $request->file('image-upload') ?? $request->file();
        if (!empty($files)) {
            foreach ($files as $file) {
                if (!in_array($file->getMimeType(), $this->valid_mimetype)) {
                    return response('Invalid filetype.')->setStatusCode(500);
                }
            }
        }
        return $next($request);
    }
}
