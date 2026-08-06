<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category_id'=>[
                'required',
                'exists:categories,id'
            ],

            'brand_id'=>[
                'nullable',
                'exists:brands,id'
            ],

            'unit_id'=>[
                'required',
                'exists:units,id'
            ],

            'name'=>[
                'bail',
                'required',
                'string',
                'min:3',
                'max:255'
            ],

            'description'=>[
                'nullable',
                'string'
            ],

            'price'=>[
                'required',
                'numeric',
                'min:0.01'
            ],

            'stock'=>[
                'required',
                'integer',
                'min:0'
            ],

            'is_active'=>[
                'boolean',
            ],

            'is_featured'=>[
                'boolean'
            ]
        ];
    }
}
