<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avis_trajet extends Model
{
    protected $fillable = [
         'note','commentaire','user_id'
    ];
}
   public function user()
    {
    	return $this->belongsTo('App\User');
    }
  public function trajet()
    {
        return $this->hasMany('App\Trajet');
    }