<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function images(){
        return $this->hasMany(Image::class);
    }
    public function availables(){
        return $this->hasMany(Availabilities::class);
    }
}
