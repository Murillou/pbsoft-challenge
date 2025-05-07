<?php

namespace App\Http\Requests;

use App\Rules\DocumentValidator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'name' => ['required', 'string', 'min:4', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
            'birthday' => ['required', 'date', 'before:today'],
            'document' => ['required', 'string', 'regex:/^(\d{3}\.?\d{3}\.?\d{3}\-?\d{2}|\d{2}\.?\d{3}\.?\d{3}\/?\d{4}\-?\d{2})$/',
                Rule::unique('clients')->ignore($this->client)],
            'image_url' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'social_name' => ['nullable', 'string', 'min:4', 'max:255', 'regex:/^[a-zA-Z\s]+$/']
        ];
    }
}
