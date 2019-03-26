<?php

namespace App\Http\Middleware;

use Closure;

class PurifyHtmlInput
{
    /**
     * HTMLPurifier
     *
     * @var \HtmlPurifier
     */
    protected $purify;

    public function __construct(\HTMLPurifier $purify)
    {
        $this->purify = $purify;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //dump($request->input('content'));
        $request->request->set(
            'content',
            $this->purify->purify($request->input('content'))
        );
        return $next($request);
    }
}
