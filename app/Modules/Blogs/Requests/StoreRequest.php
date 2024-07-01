<?php

namespace App\Modules\Blogs\Requests;


use Illuminate\Validation\Rule;
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
            'title'              =>  ['required', 'max:125', 'min:3'],
            'description'        =>  ['required', 'min:3'],
            'image'              => 'required',
            'blog_categories_id' => ['required', Rule::exists('blog_categories', 'id')],
        ];
    }
}
