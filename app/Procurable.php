<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procurable extends Model
{
    protected $guarded = [];
    
    public function type(){
        return $this->belongsTo(ProcurableType::class);
    }
    public function availabilities(){
        return $this->hasMany(Availabilities::class);
    }
}
