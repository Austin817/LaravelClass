<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    // 強制連結
    protected $table = 'product_types';
    // 允許改動
    protected $fillable = ['id','type_name','created_at','updated_at'];
    // 不允許改動
    protected $guarded = ['type_name'];

    // 關聯 Product 表單
    public function linkProduct()
    {
        return $this->hasMany('App\Product','type_id','id');
    }
}
