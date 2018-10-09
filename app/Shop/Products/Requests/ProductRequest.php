<?php

namespace App\Shop\Products\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'quantity' => 'required | min:0',
            'price' => 'required| min:0',
            'status' => 'required'
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
            'description.max:255' => 'Description is too long',
            'quantity.required' => 'A quantity is required',
            'quantity.min:0' => 'Quantity can\'t be negative', 'price.required' => 'A price is required',
            'price.min:0' => 'Price can\'t be negative',
            'status.required' => 'A status is required',
        ];
    }
}