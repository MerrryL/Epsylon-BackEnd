<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $guarded = [];

    public function product(){
        return $this->morphTo( Product::class, 'Productable');
    }
    public function shoppingCart(){
        return $this->morphTo( ShoppingCart::class, 'Shoppable');
    }
    
}
