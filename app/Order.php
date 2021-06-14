<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     // 強制連結
     protected $table = 'orders';
     // 允許改動
     protected $fillable = ['user_id','order_no','name','phone','email','county','district','zipcode','address','price','pay_type','is_paid','shipping','shipping_fee','shipping_status_id','order_status_id','remark','created_at','updated_at'];
     // 不允許改動
     protected $guarded = ['user_id'];
}
