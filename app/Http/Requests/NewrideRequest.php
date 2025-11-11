<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewrideRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'driver_vehicle_id' => 'required|exists:driver_vehicles,id',
        'origin_name' => 'required|string|max:255',
        'destination_name' => 'required|string|max:255',
        'departure_time' => 'required|date_format:H:i',
        'date_of_departure' => 'required|date|after:now',
        'available_seats' => 'required|integer|min:1',
        'origin_coordinations' => 'nullable|string|max:255',
        'description' => 'nullable|string|max:1000',
        'status' => 'required|string',
        'contribution_per_seat' => 'required|numeric|min:0',
        'total_bookings' => 'nullable|integer|min:0',
        'origin_lat' => 'required|numeric|between:-90,90',
        'origin_long' => 'required|numeric|between:-180,180',
        'destination_lat' => 'required|numeric|between:-90,90',
        'destination_long' => 'required|numeric|between:-180,180',
        ];
    }
}
