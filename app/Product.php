<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['name','desc'];
    public $timestamps = false;

public function category(){
        return $this->belongsTo('App\Category');
    }

public function ProductImgs(){
        return  $this->hasMany('App\ProductImage');
    }

public function RentalProducts(){
        return  $this->hasMany('App\RentalProduct');
    }
}
