<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class moyendeTransport extends Model
{
        protected $fillable = [
         'type','user_id','trajet_id','systemehoraires_id','avi_moyen_id'
    ];
}
   public function user()
    {
    	return $this->belongsTo('App\User');
    }
   public function Trajet()
    {
    	return $this->belongsTo('App\trajet');
    }
   public function systemehoraire()
    {
    	return $this->belongsTo('App\systemehoraire');
    }
   public function aviMoyen()
    {
    	return $this->belongsTo('App\aviMoyen');
    }
