<?php

namespace App\Http\Requests\Api\Ad;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'price' => ['required', 'numeric', 'min:0'],
            'location' => ['nullable', 'string'],
            'category_id' => ['required', 'exists:categories,id'],
            'attributes' => ['nullable', 'array'],
            'locale' => ['required', 'string', 'size:2'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
