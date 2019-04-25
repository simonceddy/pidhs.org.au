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
        //dd($files);
        if (!empty($files)) {
            $this->checkFiles($files);
        }
        return $next($request);
    }

    private function checkFiles(array $files)
    {
        //dd($files);
        foreach ($files as $file) {
            if (is_array($file)) {
                $this->checkFiles($file);
            } elseif (!in_array($file->getMimeType(), $this->valid_mimetype)) {
                return response('Invalid filetype.')->setStatusCode(500);
            }
        }
    }
}
