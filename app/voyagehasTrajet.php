<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class voyagehasTrajet extends Model
{
{
      protected $fillable = [
         'voyage_id','trajet_id'
    ];

}
 public function voyage()
    {
    	return $this->belongsTo('App\voyage');
    }
public function trajet()
    {
    	return $this->belongsTo('App\trajet');
    }
