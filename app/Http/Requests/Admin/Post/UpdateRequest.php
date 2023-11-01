<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => ['string' , 'min:3'],
            'content' => ['string', 'min:12'],
            'image' => ['file']
        ];
    }
    public function messages ()
    {
        return [
            'title.string' => 'Title must be a string',
            'title.min' => 'Min: 3',

            'content.string' => 'Text must be a string',
            'content.min' => 'Min: 3',

            'image.file' => 'Image must be a file'
        ];
    }
}
