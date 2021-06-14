<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
     // 強制連結
     protected $table = 'order_details';
     // 允許改動
     protected $fillable = ['order_id','product_id','qty','old','created_at','updated_at'];
     // 不允許改動
     protected $guarded = ['order_id'];
}
