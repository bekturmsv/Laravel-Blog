<?php

namespace App\Http\Requests\Admin\User;

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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "name"=> "required|string",
            "email"=> "required|string|email|unique:users",
            "password"=> "required|string",
            "role"=>"required|integer"
        ];
    }

    public function messages()
    {
        return [
            "name.required"=>"Это поле необходимо для заполнения",
            "name.string"=>"Имя должно быть строкой",
            "email.required"=>"Это поле необходимо для заполнения",
            "email.string"=>"Почта должно быть строкой",
            "email.email"=>"Ваша почта должна соответствовать формату mail@some.domain",
            "email.unique"=>"Пользователь с таким email уже существует",
            "password.required"=>"Это поле необходимо для заполнения",
            "password.string"=>"пароль должен быть строкой",
        ];
    }
}
