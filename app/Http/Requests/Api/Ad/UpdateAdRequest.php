<?php

namespace App\Http\Requests\Api\Ad;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['sometimes', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'price' => ['sometimes', 'numeric', 'min:0'],
            'location' => ['nullable', 'string'],
            'category_id' => ['sometimes', 'exists:categories,id'],
            'attributes' => ['nullable', 'array'],
            'locale' => ['required', 'string', 'size:2'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
