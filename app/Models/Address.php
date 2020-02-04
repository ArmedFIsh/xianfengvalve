<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    /**
     * 使用的表
     * 
     * @var string
     */
    protected $table = 'addresses';

    /**
     * 主键
     * 
     * @var string
     */
    protected $primaryKey = "address_id";

    /**
     * 用户可填写的字段。
     *
     * @var array
     */
    protected $fillable = [
        'address_name', 'phone_number', 'postal_code', 'nation', 'province', 'city', 'country', 'detail_address', 'user_id'
    ];

    /**
     * 在数组或者JSON中应该隐藏的字段。
     *
     * @var array
     */
    protected $hidden = [];

}
