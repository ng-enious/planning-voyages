<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class avis extends Model
{
   protected $fillable = [
         'id','note','commentaire','user_id','confirm'
    ];
     public function user()
    {
    	return $this->belongsTo('App\User');
    }
}