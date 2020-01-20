<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $guarded = [];

    public function cartitems(){
        return $this->morphOneOrMany(CartItem::class, 'cartitemisable');
    }
}
