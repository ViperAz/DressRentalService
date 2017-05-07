<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
   protected $fillable = ['name','desc','price'];
   protected $visible = ['id','name','desc','price'];
}
