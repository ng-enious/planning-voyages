<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class moyens extends Model
{
    protected $fillable = [
         'train','metro','bus','louage','taxi'
    ];
}
