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
            ])
            ->timeout(5)
            ->post('https://authentication.zomacdigital.co.zw/api/user/verify-token');

            $json = $response->json();

            if (
                !isset($json['data']['authenticated']) ||
                !$json['data']['authenticated']
            ) {
                return response()->json(['message' => 'Unauthorized: Invalid token or authentication failed'], 403);
            }

            // Optionally, set verified user info on the request if needed
            // $request->merge(['auth_data' => $json['data']]);

        } catch (\Exception $e) {
            return response()->json(['message' => 'Unauthorized: Token verification failed'], 403);
        }

        return $next($request);
    }
}
