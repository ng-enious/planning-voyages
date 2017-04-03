<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lieu extends Model
{
   protected $fillable = [
         'nom','type','addresse','latitude','langitude','user_id','confirm'
    ];
     public function user()
    {
    	return $this->belongsTo('App\User');
    }
   public function alieu()
    {
    	return $this->hasMany('App\Avis_lieu');
    }
}

