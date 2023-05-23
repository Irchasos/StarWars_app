<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            '_answer' => 'required | simple_captcha'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'name is required',
            'email.required' => 'email is required',
            'email.email' => 'email address invalid',
            'email.unique:users' => 'this email is already taken',
            'password.required' => 'password is required',
            'password.min' => 'min 6 characters',
            '_answer.required' =>'capcha is required',
            '_answer.simple_captcha' => 'wrong anwser'
        ];
    }
}
