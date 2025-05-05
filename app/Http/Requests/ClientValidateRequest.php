<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientValidateRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:4', 'max:255'],
            'birthday' => ['required', 'date', 'before:today'],
            'document' => ['required', 'string', 'max:20', 'unique:clients,document'],
            'image_url' => ['nullable', 'url', 'mimes:jpg,jpeg,png', 'max:2048'],
            'social_name' => ['nullable', 'string', 'min:4', 'max:255']
        ];
    }
}
