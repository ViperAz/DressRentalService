<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    //
    protected $fillable = ['day','price'];

    public function RentalProduct(){
        return this->belongsTo('App\RentalProduct');
    }
}
