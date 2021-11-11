<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'category_name' => 'required|unique:App\Models\Category,name',
            // 'category_name' => 'required|numeric|min:1|max:6',
            'category_description' => 'required'
        ];
    }

    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */
    public function messages()
    {
        return [
            'category_name.required' => 'A CATEGORY is required',
            'category_name.min' => 'A CATEGORY must be greater than 1',
            'category_name.max' => 'A CATEGORY must be less than 6',
            'category_description.required' => 'A DESCRIPTION is required',
        ];
    }   
}
