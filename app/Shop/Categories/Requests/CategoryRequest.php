<?php

namespace App\Shop\Categories\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required | min:3',
            'description' => 'required | min:10 | max:255',
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
            'name.required' => 'A name is required',
            'name.min:3' => 'Name must be at least 3 characters',
            'description.required' => 'A description is required',
            'description.min:10' => 'Description must be at least 10 characters',
            'description.max:255' => 'Description is too long'
        ];
    }
}