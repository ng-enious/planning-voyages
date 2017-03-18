<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Systemehoraire extends Model
{
      protected $fillable = [
         'heureDepart','heureArrive'
    ]; 
}
  public function Moyen_transport()
    {
        return $this->hasMany('App\Moyen_transport');
    }
