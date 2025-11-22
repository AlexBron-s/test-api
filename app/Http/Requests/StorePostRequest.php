<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'max:100'],
            'descriptions' => ['required', 'max:255'],
            'text' => 'required',
            'user_id' => ['required', 'exists:App\Models\User,id'],
        ];
    }
}
