<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProductRequest extends FormRequest
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
            'name'=>'bail|required',
            'sku'=>'bail|required',
            'desc'=>'bail|required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'nhập tên sản phẩm',
            'sku.required' => 'nhập mã sản phẩm',
            'desc.required' => 'nhập mô tả sản phẩm',
        ];
    }
}
