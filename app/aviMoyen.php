<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aviMoyen extends Model
{
       protected $fillable = [
         'note','commentaire','user_id'
    ];
}
   public function user()
    {
    	return $this->belongsTo('App\User');
    }
  public function moyendeTransport()
    {
        return $this->hasMany('App\moyendeTransport');
    }

