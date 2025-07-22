<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'customer_name' => 'required|string',
        'items'      => 'required|array|min:1',
        'items.*.product_code' => 'required|string|exists:products,product_code',
        'items.*.quantity'     => 'required|integer|min:1',
        'items.*.unit_price'   => 'required|numeric|min:0',
        ];
    }
}
