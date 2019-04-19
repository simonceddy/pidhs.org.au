<?php

namespace App\Http\Middleware;

use Closure;

class ValidateCKEditorUpload
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
        dump($request->post('uploaded-file'));
        $file = $request->file('uploaded-file');
        dump($file);
        if (isset($file) && !in_array($file->getMimeType(), $this->valid_mimetype)) {
            return response()->json([
                'uploaded' => false,
                'error' => ['Invalid Mimetype']
            ])->setStatusCode(500);
        }
        return $next($request);
    }
}
