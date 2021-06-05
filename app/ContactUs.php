<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    // 強制連結
    protected $table = 'contact_us';
    // 允許改動
    protected $fillable = ['name','email','message','created_at','updated_at'];
    // 不允許改動
    protected $guarded = ['name'];
}
