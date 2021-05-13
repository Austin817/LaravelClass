<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    // 強制連結
    protected $table = 'product_types';
    // 允許改動
    protected $fillable = ['id','name','created_at','updated_at'];
    // 不允許改動
    protected $guarded = ['name'];

    // 關聯 Product_type 表單
    public function Product()
    {
        return $this->hasMany('App\Product_type','type_id','id');
    }
}
