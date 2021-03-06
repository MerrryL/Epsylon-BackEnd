<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingInfo extends Model
{
    protected $guarded = [];

    public function order(){
        return $this->HasOne('\App\Order');
    }
}
