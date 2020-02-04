<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * 使用的表
     * 
     * @var string
     */
    protected $table = 'users';

    /**
     * 用户可填写的字段。
     *
     * @var array
     */
    protected $fillable = [
        'user_name', 'user_account', 'user_password',
    ];

    /**
     * 在数组或者JSON中应该隐藏的字段。
     *
     * @var array
     */
    protected $hidden = [
        'user_password', 'remember_token',
    ];

    /**
     * 需要转变为原生类型的字段。
     *
     * @var array
     */
    protected $casts = [
        'user_account_verified_at' => 'datetime',
    ];

    /**
     * 获取用户的地址。
     * 
     * @return 
     */
    public function addresses() {
        return $this->hasMany('App\Models\Address');
    }

}
