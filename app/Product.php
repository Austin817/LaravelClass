<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // 強制連結
    protected $table = 'products';
    // 允許改動
    protected $fillable = ['type_id','name','price','introduction','img','created_at','updated_at'];
    // 不允許改動
    protected $guarded = ['type_id'];

    // 關聯 Product 表單
    public function Product_type()
     {
        return $this->hasOne('App\Product_type','id','type_id');
     }
}
