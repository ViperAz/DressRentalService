<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentalProduct extends Model
{
    //
    protected $fillable = ['day','price'];

    public function product(){
        return this->belongsTo('App\Product');
    }

        public function promotions(){
        return this->hasMany('App\Promotion');
    }
}
