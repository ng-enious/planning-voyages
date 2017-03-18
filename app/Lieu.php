<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lieu extends Model
{
   protected $fillable = [
         'nom','type','addresse','lantitude','langitude','user_id'
    ];
}
   public function user()
    {
    	return $this->belongsTo('App\User');
    }
   public function alieu()
    {
    	return $this->hasMany('App\Avis_lieu');
    }
