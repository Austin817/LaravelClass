<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // 強制連結
    protected $table = 'product';
    // 允許改動
    protected $fillable = ['type','name','price','introduction','img','created_at','updated_at'];
    // 不允許改動
    protected $guarded = ['type'];
}
