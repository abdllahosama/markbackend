<?php

namespace App\Modules\Blogs\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListRequest extends FormRequest
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
            'page'      => 'nullable|numeric',
            'orderBy'   => 'nullable|string|in:',
            'orderType' => 'nullable|string|in:asc,desc',
            'search'    => 'nullable|string',
        ];
    }
}
