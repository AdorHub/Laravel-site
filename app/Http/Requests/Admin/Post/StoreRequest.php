<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => ['required', 'string' , 'unique:posts', 'min:3'],
            'content' => ['required', 'string', 'min:12'],
            'image' => ['required', 'file']
        ];
    }
    public function messages ()
    {
        return [
            'title.required' => 'Field Missing',
            'title.string' => 'Title must be a string',
            'title.unique' => 'This title already exist',
            'title.min' => 'Min: 3',

            'content.required' => 'Field Missing',
            'content.string' => 'Text must be a string',
            'content.min' => 'Min: 3',

            'image.required' => 'Field Missing',
            'image.file' => 'Image must be a file'
        ];
    }
}
