<?php

namespace App\Http\Middleware;

use Closure;

class ValidatePdfUpload
{
    /**
     * Accepted mimetypes
     *
     * @var array
     */
    protected $mimetype = 'application/pdf';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $files = $request->file();
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
            if ($file->getMimeType() !== $this->mimetype) {
                return response('Invalid filetype.')->setStatusCode(500);
            }
        }
    }
}
