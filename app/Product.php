<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // 強制連結
    protected $table = 'products';
    // 允許改動
    protected $fillable = ['type_id','name','price','description','img','created_at','updated_at'];
    // 不允許改動
    protected $guarded = ['type_id'];

    // 關聯 ProductType 表單
    public function linkProductType()
     {
        return $this->hasOne('App\ProductType','id','type_id');
     }

    // 關聯 ProductImg 表單
    public function linkProductImg()
     {
        return $this->hasMany('App\ProductImg','product_id','id');
     }
}
