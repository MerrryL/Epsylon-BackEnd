<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function images(){
        return $this->morphOneOrMany(Image::class, 'imageable');
    }
    public function procurables(){
        return $this->morphOneOrMany(Procurable::class, 'available');
    }
}
