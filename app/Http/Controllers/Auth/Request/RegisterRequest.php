<?php

namespace App\Http\Controllers\Auth\Request;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $input = $this->all();

        $this->merge($input);
    }

    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'privacy_policy' => ['required'],
        ];
    }

}
