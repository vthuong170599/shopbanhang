<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBannerRequest extends FormRequest
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
            'title'=> 'required',
            'content'=>'required',
            'img_banner'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'bạn chưa nhập tên',
            'title.required'=>'bạn chưa nhập tiêu đề',
            'content.required'=>'bạn chưa nhập nội dung',
            'img_banner.required'=>'bạn chưa nhập ảnh nội dung',
        ];
    }
}
