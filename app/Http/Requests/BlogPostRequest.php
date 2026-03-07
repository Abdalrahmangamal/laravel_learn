<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogPostRequest extends FormRequest
{
  

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
              'title'=>'bail|required|unique:post',
            'body'=>'required',
            'author'=>'required'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required'=>'title is required',
            'body.required'=>'content is required',
            'author.required'=>'author is required'
        ];
    }
}
