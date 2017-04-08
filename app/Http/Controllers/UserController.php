<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lieu;
use App\Trajet;
use App\User;
use App\Moyen_transport;
//use Illuminate\Support\Facades\Auth;
use Auth;
use Illuminate\Support\Facades\Redirect;
class UserController extends Controller
{
    public function ajouterlieu(Request $request){
       $message='';
    if (Auth::check())
    {
          
      $user=Auth::user();
      //dd($user->id);
  
    
              $lieu= Lieu::create([
            'nom' => $request->get('nom'),
            'type' => $request->get('type'),
            'addresse' =>$request->get('addresse'),
            'latitude'=>$request->get('latitude'),
             'langitude'=>$request->get('langtitude'),
                'user_id'=>$user->id,
                'confirm'=>1
                
        ]);
      if ($lieu)
        $message='lieu ajouté avec succes ';
      else 
        $message='lieu non ajouté';
      
    }

      return redirect('/')->with('message', $message);
      
    }
     public function test(Request $request){
       $message='';
    if (Auth::check())
    {
          
      $user=Auth::user();
      //dd($user->id);
  
    
              $lieu= Lieu::create([
            'nom' => $request->get('nom'),
            'type' => $request->get('type'),
            'addresse' =>$request->get('addresse'),
            'latitude'=>$request->get('latitude'),
             'langitude'=>$request->get('langtitude'),
                'user_id'=>$user->id,
                'confirm'=>1
                
        ]);
      if ($lieu)
        $message='lieu ajouté avec succes ';
      else 
        $message='lieu non ajouté';
      
    }

      return Redirect::to('/admin')->with('message');
    }
  
  
  
  
  
 public function ajoutertrajet(Request $r){
         $message='';
    if (Auth::check())
    {
      
              $user=Auth::user();
      //dd($user);
              $trajet= Trajet::create([
            'depart' => $r->get('depart'),
            'arrive' => $r->get('arrive'),
            'user_id'=>$user->id,
                'confirm'=>1
        ]);
             if ($trajet)
        //dd($trajet);
        $message='trajet ajouté avec succes ';
      else
        $message='trajet non ajouté';
   
    }
     return Redirect::to('/home')->with('message');   
 }
  
  
  
   
    public function ajoutermoyen(Request $r){
     $message='';
        if (Auth::check())
     {
              $user=Auth::user();
              $moyen_transport= Moyen_transport::create([
                  'type' => $r->get('type'),
                  'de' => $r->get('de'),
                  'vers' => $r->get('vers'),
                  'user_id'=>$user->id,
                'confirm'=>1
        ]);
        if ($moyen_transport)
        //dd($moyen_transport);
        $message='moyen de transport ajouté avec succes ';
        else
        //dd('error');
        $message='moyen de transport non ajouté';
      
      
     }
     
      return Redirect::to('/admin')->with('message');
    }
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    public function suggerlieu(Request $request){
       $message='';
    if (Auth::check())
    {
          
      $user=Auth::user();
      //dd($user->id);
  
    
              $lieu= Lieu::create([
            'nom' => $request->get('nom'),
            'type' => $request->get('type'),
            'addresse' =>$request->get('addresse'),
            'latitude'=>$request->get('latitude'),
             'langitude'=>$request->get('langtitude'),
                'user_id'=>$user->id
                
        ]);
      if ($lieu)
        $message=' lieu suggéré avec suggès, l administrateur va le confirmer ';
      else 
        $message='lieu non suggeré';
      
    }

      return Redirect::to('/home')->with('message');
    }
  
  
  
  
 public function suggertrajet(Request $r){
   
      $message='';
    if (Auth::check())
    {
      
              $user=Auth::user();
      //dd($user);
              $trajet= Trajet::create([
            'depart' => $r->get('depart'),
            'arrive' => $r->get('arrive'),
            'user_id'=>$user->id
        ]);
             if ($trajet)
        //dd($trajet);
        $message='trajet suggéré avec suggès, l administrateur va le confirmer ';
      else
        $message='trajet non suggeré';
   
    }

     return Redirect::to('/home')->with('message');  
 }
   
    public function suggermoyen(Request $r){
     $message='';
        if (Auth::check())
     {
              $user=Auth::user();
              $moyen_transport= Moyen_transport::create([
                  'type' => $r->get('type'),
                  'de' => $r->get('de'),
                  'vers' => $r->get('vers'),
                  'user_id'=>$user->id  
        ]);
        if ($moyen_transport)
        //dd($moyen_transport);
        $message='moyen de transport suggéré avec suggès, l administrateur va le confirmer ';
        else
        //dd('error');
        $message='moyen de transport non suggeré';
      
      
     }
     
      return Redirect::to('/home')->with('message');
    }

  
}
