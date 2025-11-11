<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Driver;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsDriverMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->user()) {
            abort(403, 'Unauthorized. Driver access required.');
        }

        // Check if the user's id exists as a user_id in the drivers table
        if (!Driver::where('user_id', $request->user()->id)->exists()) {
            abort(403, 'Unauthorized. Driver access required.');
        }

        return $next($request);
    }
}
