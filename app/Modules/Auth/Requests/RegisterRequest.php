<?php

namespace App\Modules\Auth\Requests;

use Illuminate\Foundation\Http\FormRequest;


class RegisterRequest extends FormRequest
{

    public function rules()
    {
        return [
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'confirmed'],
        ];
    }
}
