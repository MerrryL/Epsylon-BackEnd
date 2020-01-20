<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Availabilities extends Model
{
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function procurable(){
        return $this->belongsTo(Procurable::class);
    }
}
