<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    //
    protected $fillable = ['start_date','end_date','price'];

    public function RentalProduct(){
        return this->belongsTo('App\RentalProduct');
    }
}
