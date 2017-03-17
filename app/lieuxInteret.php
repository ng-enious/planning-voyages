<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lieuxInteret extends Model
{
   protected $fillable = [
         'nom','type','adress','lantitude','langitude','user_id','avilieu_id'
    ];
}
   public function user()
    {
    	return $this->belongsTo('App\User');
    }
   public function alieu()
    {
    	return $this->belongsTo('App\Alieu');
    }
