<?php

namespace App\Modules\Auth\Requests;

use Illuminate\Foundation\Http\FormRequest;


class UpdateRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name'                => 'nullable|max:255',
            'user_name'           => 'nullable|max:255',
            'email'               => 'required|email',
            'image'               => 'nullable',
            'password'            => ['nullable'],
        ];
    }
}
