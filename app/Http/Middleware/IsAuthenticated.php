<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Http;

class IsAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->bearerToken();

        if (!$token) {
            return response()->json(['message' => 'Unauthorized: No bearer token provided'], 403);
        }

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token,
                'Accept' => 'application/json',
            ])->timeout(5)
              ->post(env('AUTH_SERVICE_URL', 'http://auth_service/verify'));

            // Expecting the external API to return a simple true for valid tokens
            if ($response->json() !== true) {
                return response()->json(['message' => 'Unauthorized: Invalid token'], 403);
            }

        } catch (\Exception $e) {
            return response()->json(['message' => 'Unauthorized: Token verification failed'], 403);
        }

        return $next($request);
    }
}
