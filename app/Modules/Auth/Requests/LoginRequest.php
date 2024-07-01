<?php

namespace App\Modules\Auth\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{

    public function rules()
    {
        return [
            'email' => 'required|email|exists:users,email',
            'password' => ['required', Password::min(6)],
        ];
    }
}
