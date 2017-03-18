<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
     protected $fillable = [
         'depart','arrive','user_id'
    ];   
}
  public function user()
    {
    	return $this->belongsTo('App\User');
    }

  public function Moyen_Transport()
    {
        return $this->hasMany('App\moyendeTransport');
    }
public function voyagehastrajet()
    {
    	return $this->belongsTo('App\voyagehastrajet');
    }