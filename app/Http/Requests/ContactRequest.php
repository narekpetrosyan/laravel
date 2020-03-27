<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'subject' => 'required|max:255',
            'image'=>'required'
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'Введите имя.',
            'name.min' => 'Минимальное количество символов 3.',
            'name.max' => 'Максимальное количество символов 15.',
            'email.required' => 'Введите эл. адрес',
        ];
    }
    
}
