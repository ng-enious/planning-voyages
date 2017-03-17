<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class voyage extends Model
{
      protected $fillable = [
         'data','user_id'
    ];

}
 public function user()
    {
    	return $this->belongsTo('App\User');
    }
ublic function voyagehastrajet()
    {
    	return $this->belongsTo('App\voyagehastrajet');
    }