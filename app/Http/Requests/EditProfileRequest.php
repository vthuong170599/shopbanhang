<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProfileRequest extends FormRequest
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
            'name'=> 'bail|required|unique:admins,name,'.$this->name,
            'email' => 'bail|required|regex:/^.+@.+$/i|unique:admins,email,'.$this->email,
            'phone'=>'bail|required|unique:admins,phone,'.$this->phone,
            'password'=>'bail|required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'nhập tên tài khoản',
            'name.unique' => 'tên này đã được sử dụng',
            'email.unique' => 'email này đã được sử dụng',
            'email.required' => 'nhập email tài khoản',
            'email.regex' => 'địa chỉ email không hợp lệ',
            // 'phone.regex' => 'số điện thoại không hợp lệ',
            'phone.required' => 'nhập số điện thoại',
            'phone.unique' => 'số điện thoại đã được sử dụng',
            'password.required' => 'nhập mật khẩu',
        ];
    }
}
