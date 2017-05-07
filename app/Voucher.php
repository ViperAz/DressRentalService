<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
  protected $fillable = ['code','start_datetime','end_datetime','discounted_price'];
  protected $visible = ['id','code','start_datetime','end_datetime','discounted_price'];
}
