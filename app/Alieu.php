<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alieu extends Model
{
   protected $fillable = [
         'note','commentaire','user_id'
    ];
}
   public function user()
    {
    	return $this->belongsTo('App\User');
    }
public function lieuxInteret()
    {
        return $this->hasMany('App\lieuxInteret');
    }