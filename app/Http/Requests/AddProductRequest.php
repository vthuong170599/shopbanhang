<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'cat_id'=>'bail|required',
            'brand_id'=>'bail|required',
            'avatar'=>'bail|required',
            'image'=>'bail|required',
            'desc'=>'bail|required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'nhập tên sản phẩm',
            'price.required' => 'nhập giá sản phẩm',
            'avatar.required' => 'nhập ảnh đại diện',
            'quantity.required' => 'nhập số lượng sản phẩm',
            'image.required' => 'nhập ảnh mô tả',
            'desc.required' => 'nhập mô tả sản phẩm',
        ];
    }
}
