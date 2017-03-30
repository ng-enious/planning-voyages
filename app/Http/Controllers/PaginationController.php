<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Lieu;
use App\Trajet;

class PaginationController extends Controller
{
    public function pagination()
    {
      $users= user::paginate(5);
   
      return view ('pagination',compact('users'));
    }
  public function gitedit($id)
  {
    $users=user::find($id);
    $role=rolle::alll();
    return view ('pagination',compact('role'));
  }
      public function paginationlieu()
    {
      $lieus= Lieu::paginate(5);
   
      return view ('paginationlieu',compact('lieus'));
    }
       public function paginationtrajet()
    {
      $trajets= Trajet::paginate(5);
   
      return view ('paginationtrajet',compact('trajets'));
    }
}
