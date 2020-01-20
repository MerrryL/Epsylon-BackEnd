<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    
    public function user(){
        return $this->morphTo(User::class, orderable);
    }

    public function shippinginfos(){
        return $this->HasOne('\App\ShippingInfo');
    }
}
