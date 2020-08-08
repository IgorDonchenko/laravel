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
            'name' => 'required|min:5|max:100',
            'email' => 'required|email|min:5|max:100',
            'subject' => 'required|min:5|max:100',
            'message' => 'required|min:5|max:100',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле ИМЯ является обязательным',
            'email.required' => 'Поле ПОЧТА является обязательным',
            'subject.required' => 'Поле Тема является обязательным',
            'message.required' => 'Поле Текст является обязательным',
            'email.email' => 'Поле Почта должно содержать адрес почты',
            'email.min' => 'Поле Почта должно содержать не менее 5 символов',
        ];
    }
}
