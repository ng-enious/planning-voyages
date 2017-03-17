<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
     protected $fillable = [
         'depart','arrive','user_id','avitrajet_id'
    ];   
}
  public function user()
    {
    	return $this->belongsTo('App\User');
    }
  public function alieu()
    {
    	return $this->belongsTo('App\aviTrajet');
    }
  public function moyendeTransport()
    {
        return $this->hasMany('App\moyendeTransport');
    }
ublic function voyagehastrajet()
    {
    	return $this->belongsTo('App\voyagehastrajet');
    }