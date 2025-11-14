<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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
            // Check for is_driver, badge and is_activated in the response data
            $data = $json['data'] ?? [];
            if (
                !isset($data['is_driver']) || !$data['is_driver'] ||
                !isset($data['is_activated']) || $data['is_activated'] != "1" ||
                !isset($data['badge']) || $data['badge'] !== 'red'
            ) {
                return response()->json(['message' => 'Unauthorized: Driver access required (activation, badge, and driver status required)'], 403);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Unauthorized: Token verification failed'], 403);
        }

        return $next($request);
    }
}
