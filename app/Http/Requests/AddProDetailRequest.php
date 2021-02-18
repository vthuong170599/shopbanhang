<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProDetailRequest extends FormRequest
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
            'sku'=>'bail|required',
            'price'=>'bail|required',
            'discount'=>'bail|required',
            'quantity'=>'bail|required',
        ];
    }

    public function messages()
    {
        return [
            'sku.required'=>'nhập mã sản phẩm',
            'pride.required'=>'nhập giá sản phẩm',
            'discount.required'=>'nhập discount',
            'quantity.required'=>'nhập số lượng sản phẩm',
        ];
    }
}
