<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTagRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tag' => 'required|min:3|max:30|unique:tags',
            'description' => 'required|min:5',
            'url' => 'nullable|min:5|max:100|url',
            'email' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'tag.required' => 'Полето Таг е задължително',
            'tag.min' => 'Полето Таг трябва да е с минимум :min знака!',
            'tag.unique' => 'Вече съществува Tag с това име!',
            'email.required' => 'Email адресът е задължителен!',
            'email.email' => 'Моля въведете валиден email адрес!'
        ];
    }
}
