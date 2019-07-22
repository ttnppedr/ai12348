<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class LogRequestResponse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $replace = ["\n", "\t"];
        $parameter = str_replace($replace, '', json_encode($request->all()));

        Log::info(
            'REQUEST: ' . $request->getMethod() . ' ' . $request->getRequestUri() . ' ' . $parameter . ', ' .
            'RESPONSE: ' . $response->getStatusCode() . ' ' . $response->getContent()
        );

        return $response;
    }
}
