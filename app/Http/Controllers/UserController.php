<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lieu;
use App\Trajet;
use App\User;
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

 public function ajoutertrajet(Request $r){
     $message='';
      $user=Auth::user();
  
     
              $Trajet= Trajet::create([
            'depart' => $r->get('depart'),
            'arrive' => $r->get('arrive'),
                
                'user_id'=>$user->id
                
        ]);
      $Trajet->user()->save($user);
      if ($Trajet)
        $message='trajet ajouté avec succes ';
      else 
        $message='trajet non cree';
      
      return Redirect::to('/home')->with('message');

     return view('aceuil', compact('message'));
      
    }
}
