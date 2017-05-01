<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Waypoints extends Model
{
    protected $fillable = [
         'name','order','trajet_id'
    ];
   public function trajet()
    {
    	return $this->belongsTo('App\Trajet');
    }
}

