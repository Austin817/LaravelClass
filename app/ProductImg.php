<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImg extends Model
{
    // 強制連結
    protected $table = 'product_imgs';
    // 允許改動
    protected $fillable = ['id','product_id','img','created_at','updated_at'];
    // 不允許改動
    protected $guarded = ['product_id'];

}
