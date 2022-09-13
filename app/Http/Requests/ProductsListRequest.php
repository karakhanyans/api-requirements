<?php

namespace App\Http\Requests;

use App\Enums\ProductCategories;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductsListRequest extends FormRequest
{
    public function rules()
    {
        return [
            'price' => ['sometimes', 'integer'],
            'category' => ['sometimes', 'string', Rule::in(ProductCategories::values())],
        ];
    }
}
