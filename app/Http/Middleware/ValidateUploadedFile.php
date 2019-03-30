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
        if (!empty($files = $request->file())) {
            foreach ($files as $file) {
                // validate mimetype
                if (!in_array($file->getMimeType(), $this->valid_mimetype)) {
                    return response('Invalid filetype.')->setStatusCode(500);
                }
            }
        }
        return $next($request);
    }
}
