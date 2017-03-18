<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avis_lieu extends Model
{
   protected $fillable = [
         'note','commentaire','user_id','lieu_id'
    ];
}
   public function user()
    {
    	return $this->belongsTo('App\User');
    }
public function Lieu()
    {
        return $this->belongsTo('App\Lieu');
    }