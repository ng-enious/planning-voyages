<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class PaginationController extends Controller
{
    public function pagination()
    {
      $users= user::paginate(3);
   
      return view ('pagination',compact('users'));
    }
}
