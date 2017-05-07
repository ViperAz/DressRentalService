<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    //
    protected $fillable = ['code','start_date','end_date','discount_price'];
    public $timestamps = false;
}
