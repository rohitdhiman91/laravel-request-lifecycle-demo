<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LogRequestTime
{
    public function handle(Request $request, Closure $next)
    {
        $start = microtime(true);

        // Pass request forward
        $response = $next($request);

        $end = microtime(true);
        $duration = number_format($end - $start, 4);

        // Log request duration
        \Log::info("Request to {$request->path()} took {$duration} seconds.");

        return $response;
    }
}
