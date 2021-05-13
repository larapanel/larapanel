<?php

namespace Larapanel\Larapanel\Http\Requests\User;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'first_name' => ['required'],
            'last_name' => ['required'],
            'mobile' => ['required', 'mobile'],
            'nid' => ['nullable','national_code'],
            'postal_code' => ['nullable','postal_code'],
            'password' => ( request()->isMethod('PATCH') && request()->has('id') ) ? ['nullable'] : ['required', 'min:8'],
            'username' => ( request()->isMethod('PATCH') && request()->has('id') )
                ? ['nullable', 'min:4', Rule::unique('users', 'username')->ignore(request('id'), 'id')]
                : ['required', 'username', 'min:4', Rule::unique('users', 'username')],

            'email' => ( request()->isMethod('PATCH') && request()->has('id') )
                ? ['required', 'email', Rule::unique('users', 'email')->ignore(request('id'), 'id')]
                : ['required', 'email', Rule::unique('users', 'email')],
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'نام کاربر را وارد کنید.',
            'last_name.required' => 'نام خانوادگی کاربر را وارد کنید.',
            'password.required' => 'رمز عبور را وارد کنید.',
            'password.min' => 'رمز عبور باید حداقل ۸ کاراکتر باشد.',
            'username.required' => 'نام کاربری را وارد کنید.',
            'username.min' => 'نام کاربری باید حداقل ۴ کاراکتر باشد.',
            'username.username' => 'نام کاربری باید فقط شامل کاراکترهای انگلیسی باشد.',
            'postal_code.postal_code' => 'کدپستی معتبر وارد کنید.',
            'nid.national_code' => 'کدملی معتبر وارد کنید.',
        ];
    }
}
