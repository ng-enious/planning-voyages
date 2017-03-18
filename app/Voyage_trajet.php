<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voyage_trajet extends Model
{
{
      protected $fillable = [
         'voyage_id','trajet_id'
    ];

}
 public function voyage()
    {
    	return $this->belongsTo('App\Voyage');
    }
public function trajet()
    {
    	return $this->belongsTo('App\Trajet');
    }
