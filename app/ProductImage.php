<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    //
    protected $fillable = ['img_url'];

    public function product(){
        return this->belongsTo('App\Category');
    }
}
