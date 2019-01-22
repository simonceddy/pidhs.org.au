<?php

namespace App\Http\Middleware;

use Closure;

class PurifyHtmlInput
{
    protected $htmlPurifier;

    public function __construct(HTMLPurifier $htmlPurifier)
    {
        $this->htmlPurifier = $htmlPurifier;
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
        return $next($request);
    }
}
