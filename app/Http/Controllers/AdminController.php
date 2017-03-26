<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
      dump('ok');
      return view('admin');
    }
   public function adminAdmin()
    {
      dump('ok');
      return view('listeutilisateur');
    }
}
