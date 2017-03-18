<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
      protected $fillable = [
         'data','user_id'
    ];

}
 public function user()
    {
    	return $this->belongsTo('App\User');
    }
public function voyagehastrajet()
    {
    	return $this->belongsTo('App\Voyage_trajet');
    