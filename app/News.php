<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    // 強制連結
    protected $table = 'news';
    // 允許改動
    protected $fillable = ['title','date','img','content','view','created_at','updated_at'];
    // 不允許改動
    protected $guarded = ['view'];
}
