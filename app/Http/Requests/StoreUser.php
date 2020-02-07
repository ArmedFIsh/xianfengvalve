<?php

namespace App\Http\Requests;
use App\Rules\Account;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
{
    /**
     * 决定哪些用户可以使用这个验证表单
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * 获取验证规则
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_name' => 'required|max:50',
            'user_account' => 'required|unique:users|max:25|min:5',
            'user_account' => new Account,
            'password' => 'required|confirmed|min:8|max:25',
        ];
    }

    /**
     * 获取验证错误的自定义属性。
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'user_account' => 'account',
        ];
    }
}
