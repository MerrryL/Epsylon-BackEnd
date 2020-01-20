<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcurableType extends Model
{
    public function procurables(){
        return $this->hasMany(Procurable::class);
    }
}
