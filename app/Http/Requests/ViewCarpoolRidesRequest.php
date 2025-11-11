<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ViewCarpoolRidesRequest extends FormRequest
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
        'origin_name' => 'required|string|max:255',
        'destination_name' => 'required|string|max:255',
        'origin_lat' => 'nullable|numeric|between:-90,90',
        'origin_long' => 'nullable|numeric|between:-180,180',
        'destination_lat' => 'nullable|numeric|between:-90,90',
        'destination_long' => 'nullable|numeric|between:-180,180',
        ];
    }
}
