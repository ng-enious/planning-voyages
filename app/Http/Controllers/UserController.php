<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lieu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
class UserController extends Controller
{
    public function ajouterlieu(Request $request){
   
      $message='';
      $user=Auth::user();
   
     
              $lieu= Lieu::create([
            'nom' => $request->get('nom'),
            'type' => $request->get('type'),
            'addresse' =>$request->get('addresse'),
            'latitude'=>$request->get('latitude'),
             'langitude'=>$request->get('langtitude'),
                'user_id'=>$user->id
                
        ]);
      $lieu->user()->save($user);
      if ($lieu)
        $message='lieu ajouté avec succes ';
      else 
        $message='lieu non cree';
      
      return Redirect::to('/home')->with('message');

     return view('aceuil', compact('message'));
      
    }
}
