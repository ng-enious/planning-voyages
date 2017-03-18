<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class systemehoraire extends Model
{
      protected $fillable = [
         'heureDepart','heureArrive'
    ]; 
}
  public function moyendeTransport()
    {
        return $this->hasMany('App\moyendeTransport');
    }
