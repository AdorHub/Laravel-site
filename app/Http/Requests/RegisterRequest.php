<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => ['required', 'min:3', 'max:30', 'string'],
            'profile_image' => ['required', 'file'],
            'email' => ['required', 'email', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed']
        ];
    }
    public function messages ()
    {
        return [
            'name.required' => 'Field Missing',
            'name.min' => 'Min: 3',
            'name.max' => 'Max: 30',
            'name.string' => 'Text must be a string',

            'profile_image.required' => 'Field Missing',
            'profile_image.file' => 'Image must be a file',

            'email.required' => 'Field Missing',
            'email.email' => 'must be like: example@mail.ru',
            'email.string' => 'Text must be a string',
            'email.max' => 'Max: 255',
            'email.unique' => 'Email already exists',

            'password.required' => 'Field Missing',
            'password.string' => 'Text must be a string',
            'password.confirmed' => 'Password mismatch'
        ];
    }
}
