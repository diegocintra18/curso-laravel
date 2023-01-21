<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrUpdateProductsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "product_name" => "string|required|min:3|max:100",
            "sku" => "integer"
        ];
    }

    public function messages()
    {
        return [
            "product_name.required" => "O campo Nome do Produto é obrigatório",
            "sku.integer" => "O campo código somente aceita números",
        ];
    }
}
