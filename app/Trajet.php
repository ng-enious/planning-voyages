<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
     protected $fillable = [
         'depart','arrive','moyentransport','user_id','confirm'
    ];   

  public function user()
    {
    	return $this->belongsTo('App\User');
    }

  public function Moyen_Transport()
    {
        return $this->hasMany('App\moyendeTransport');
    }
    public function wayPoints()
    {
        return $this->hasMany('App\Waypoints');
    }
public function voyagehastrajet()
    {
    	return $this->belongsTo('App\voyagehastrajet');
    }
}