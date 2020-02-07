<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Account implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * 决定验证器的验证规则
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return preg_match('/^[a-zA-Z0-9_-]*$/', $value);
    }

    /**
     * 获取验证器错误信息
     *
     * @return string
     */
    public function message()
    {
        return trans('validation.account');
    }
}
