<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaterialRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'material_type_id' => ['required', 'integer', 'exists:material_types,id'],
            'price' => ['required', 'numeric', 'min:0'],
            'quantity_stock' => ['required', 'integer', 'min:0'],
            'min_quantity' => ['required', 'integer', 'min:0'],
            'quantity_package' => ['required', 'numeric', 'min:0'],
            'unit_id' => ['required', 'integer', 'exists:units,id'],
        ];

    }
}
