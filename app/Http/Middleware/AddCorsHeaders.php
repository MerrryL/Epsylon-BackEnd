<?php

namespace App\Http\Middleware;

use Closure;

class AddCorsHeaders
{
    /**
     * Check for CORS request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $headers = [
            'Access-Control-Allow-Origin'      => $request->header('Origin'),
            'Access-Control-Allow-Methods'     => 'HEAD, POST, GET, OPTIONS, PUT, DELETE',
            'Access-Control-Allow-Headers'     => $request->header('Access-Control-Request-Headers'),
        ];

        if ($request->isMethod('OPTIONS')) {
            return response()->json('{"method":"OPTIONS"}', 200, $headers);
        }

        if ($request->header('Origin')) {
            config(['access-control-origin' => $request->header('Origin')]);
        }

        return $next($request);
    }
}