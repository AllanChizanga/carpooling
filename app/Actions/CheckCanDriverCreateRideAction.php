<?php

namespace App\Actions;

use Exception;
use Illuminate\Support\Facades\Http;

class CheckCanDriverCreateRideAction
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Retrieve the balance of the user from the vpay service.
     *
     * @param mixed $user_id
     * @return float|null Returns the user's balance as a float, or null on failure.
     */
    public function execute($user_id)
    {
        return true; //waiting for vpay api 
        try {
            // The vpay API endpoint for retrieving a user's balance
            $response = Http::post('https://vpay.zomacdigital.co.zw/api/get-user-balance', [
                'user_id' => $user_id
            ]);

            if ($response->failed()) {
                // If the request failed (network, timeout, server error, etc.), return null
                return null;
            }

            // Directly get the 'balance' key from the response
            $balance = $response['balance'] ?? null;

            // Check if balance is greater than 0
            if ($balance !== null && $balance > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            // Any exception means communication failed; fail securely
            return null;
        }
    }
}
