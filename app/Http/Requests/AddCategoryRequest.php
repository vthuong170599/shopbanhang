<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCategoryRequest extends FormRequest
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
            'name'=>'bail|required|unique:categories,name',
            'desc'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'tên không được để trống',
            'name.unique' => 'tên đã được sử dụng',
            'desc.required' => 'mô tả không được để trống'
        ];
    }
}
