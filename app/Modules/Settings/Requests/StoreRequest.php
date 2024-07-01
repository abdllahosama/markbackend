<?php

namespace App\Modules\Settings\Requests;



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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {

        return [
            'company_name'         => 'nullable|string|max:255',
            'company_description'  => 'nullable|string|max:255',
            'company_address'      => 'nullable|string|max:255',
            'company_logo'         => 'nullable|string|max:255',
            'company_email'        => 'nullable|email|max:255',
            'phone_1'              => 'nullable|string|max:255',
            'phone_2'              => 'nullable|string|max:255',
            'social_links'         => 'nullable|max:255'

        ];
    }
}
