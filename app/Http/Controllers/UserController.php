<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lieu;
use App\Trajet;
use App\User;
use App\Voyage;
use App\Moyen_transport;
use App\Waypoints;
use App\avis;
//use Illuminate\Support\Facades\Auth;
use Auth;
use Illuminate\Support\Facades\Redirect;
class UserController extends Controller
{
  ///ajouter admin
  public function enregistreavis(Request $request)
  {
     $message='';
   // if (Auth::check())
    
          
    //  $user=Auth::user();
      //dd($user->id);
  
    
              $avis= Lieu::create([
            'note' => $request->get('note'),
            'commentaire' => $request->get('commentaire'),
                'confirm'=>0
                
        ]);
  //    if ($avis)
  //      $message='lieu ajouté avec succes ';
  //    else 
 //       $message='lieu non ajouté';
      
    }
  public function ajoutertrajetadmin(Request $request){
    //dd($request);
              $message='';
    if (Auth::check())
    {
          
      $user=Auth::user();
      
    $depart=$request->get('start');
    $arrive=$request->get('end');
    $waypoints=$request->get('points');
    $moyen_transport=$request->get('moyen');
    $trajet=Trajet::create([
            'depart' => $depart,
            'arrive' => $arrive,
            'moyentransport'=>$moyen_transport,
        'user_id'=>$user->id,
            'confirm'=>1
                
        ]);
    $i=1;
    if($waypoints)
    {
          foreach($waypoints as $waypoint)
    {
      
      Waypoints::create([
            'name' => $waypoint,
            'order' => $i,
            'trajet_id' => $trajet->id,
            'confirm'=>1
                
        ]);
      $i++;
    }
    }

      if ($trajet)
        $message='trajet ajouté avec succes ';
      else 
        $message='trajet non ajouté';
      
    }

      return redirect('/ajoutertajet')->with('message', $message);
      
    }
    public function ajoutertrajetuser (Request $request){
    //dd($request);
            $message='';
    if (Auth::check())
    {
          
      $user=Auth::user();
      
    $depart=$request->get('start');
    $arrive=$request->get('end');
    $waypoints=$request->get('points');
    $moyen_transport=$request->get('moyen');
    $trajet=Trajet::create([
            'depart' => $depart,
            'arrive' => $arrive,
            'moyentransport'=>$moyen_transport,
        'user_id'=>$user->id,
            'confirm'=>0
                
        ]);
    $i=1;
    if($waypoints)
    {
          foreach($waypoints as $waypoint)
    {
      
      Waypoints::create([
            'name' => $waypoint,
            'order' => $i,
            'trajet_id' => $trajet->id,
            'confirm'=>1
                
        ]);
      $i++;
    }
    }

      if ($trajet)
        $message='trajet ajouté avec succes ';
      else 
        $message='trajet non ajouté';
      
    }

      return redirect('/suggerertrajet')->with('message', $message);
      
    }
  public function get_trajet(Request $request){
    $wapointsArray=array();
   $depart=$request->get('start');
    $arrive=$request->get('end');
    $moyen_transport=$request->get('moyen');
    $save=$request->get('save');
    $user=Auth::user();
    //dd($save);
    $trajet=Trajet::where('depart',$depart)->where('arrive',$arrive)->where('moyentransport',$moyen_transport)
    ->with('wayPoints')->first();
    //dd($trajet);
    // dd($trajet->wayPoints);
   // dd($lieux);
    if($trajet)
    {
                if($trajet->wayPoints)
                 {
                  foreach($trajet->wayPoints as $waypoint)
                          $wapointsArray[]= $waypoint->name;
                  $lieux=Lieu::whereIn('ville',$wapointsArray)->get();
                    $status='ok';
      
                 }
                else
                {
                         $status='ok';
                         $lieux= null;
                }
                
      
    }
   
    else
    {
      $lieux= null;
      $status='trajet non trouvé';
    }
      
       //dd($trajet);
    if($user)
    {
      if($save)
      $v=Voyage::create([
           
      'user_id'=>$user->id
                
        ]);
    }
    return redirect('/')->with('trajet',$trajet)->with('status',$status)->with('lieux',$lieux);
 
    
  }
    public function get_trajetadmin(Request $request){
   $depart=$request->get('start');
    $arrive=$request->get('end');
    $moyen_transport=$request->get('moyen');
  $trajet=Trajet::where('depart',$depart)->where('arrive',$arrive)->where('moyentransport',$moyen_transport)
    ->with('wayPoints')->first();
     
    if($trajet)
      $status='ok';
    else
      $status='not found';
       //dd($trajet);
      
    return redirect('/admin')->with('trajet',$trajet)->with('status',$status);
 
    
  }
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

      return redirect('/admin')->with('message', $message);
      
    }
   public function ajouterlieuuser(Request $request){
       $message='';
    if (Auth::check())
    {
          
      $user=Auth::user();
    //  dd($user->id);
  
    
              $lieu= Lieu::create([
            'nom' => $request->get('nom'),
            'type' => $request->get('type'),
            'addresse' =>$request->get('addresse'),
            'latitude'=>$request->get('latitude'),
             'langitude'=>$request->get('langtitude'),
                'user_id'=>$user->id,
                'confirm'=>0
                
        ]);
      if ($lieu)
        $message='lieu ajouté avec succes ';
      else 
        $message='lieu non ajouté';
      
    }

      return redirect('/admin')->with('message', $message);
      
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
   //admiinnnnnn
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
     
       return redirect('/admin')->with('message', $message);
    }
  
  ////suggerer user simple  
    public function ajoutermoyenuser (Request $r){
    $message='';
    if (Auth::check())
    {
      
              $user=Auth::user();
   
              $moyen_transports= moyen_transport::create([
                  'type' => $r->get('type'),
            'de' => $r->get('de'),
            'vers' => $r->get('vers'),
                  'user_id'=>$user->id,
                 'confirm'=>0
        ]);
             if ($moyen_transports)
        //dd($trajet);
        $message='moyen transport suggéré avec suggès, l administrateur va le confirmer ';
      else
        $message='moyen transport  non suggeré';
   
    }

     return redirect('/suggerermoyendetransport')->with('message', $message);
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
                'ville' =>$request->get('ville'),
            'addresse' =>$request->get('addresse'),
            'latitude'=>$request->get('latitude'),
             'langitude'=>$request->get('langtitude'),
                'user_id'=>$user->id
                
        ]);
      if ($lieu)
        $message=' lieu ajouter avec succès, l administrateur va le confirmer ';
      else 
        $message='désolé le lieu n est pas ajouter';
      
    }

      return redirect('/suggererlieu')->with('message', $message);
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

     return redirect('/')->with('message', $message);
 }  
 public function suggermoyen(Request $r){
   
  //dd($r);
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
     
      return redirect('/')->with('message', $message);
    }
  public function donnerAvis(Request $r){
    $depart=$r->get('depart');
    $arrive=$r->get('arrive');
    $moyen_transport=$r->get('transport');
    $note=$r->get('note');
    $commentaire=$r->get('commentaire');
    
  }

  
}
