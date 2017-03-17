<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'name','lastname', 'email', 'password','birthday', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
    public function aLieu()
    {
        return $this->hasMany('App\ALieu');
    }
public function lieuxInteret()
    {
        return $this->hasMany('App\lieuxInteret');
    }
public function voyage()
    {
        return $this->hasMany('App\voyage');
    }
   public function aviTrajet()
    {
        return $this->hasMany('App\aviTrajet');
    }
   public function Trajet()
    {
        return $this->hasMany('App\Trajet');
    }
  public function moyendeTransport()
    {
        return $this->hasMany('App\moyendeTransport');
    }