<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    //
    protected $fillable = ['img_url'];
    public $timestamps = false;
    public function product(){
        return  $this->belongsTo('App\Product');
    }
}
