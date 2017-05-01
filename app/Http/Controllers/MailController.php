<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\Remenber;
use App\Mail\Remenbertrajet;
use App\User;
use App\Lieu;
use DB;
use App\Moyen_transport;
use App\Trajet;
use Illuminate\Support\Facades\Redirect;

class MailController extends Controller
{
   
    public function testmail($id){
      $lieu=Lieu::where('id',$id)->with('user')->first();
      //dd($lieu);
      $email=$lieu->user->email;
      
      $lieu_name=$lieu->nom;
      $title='Lieu Supprimé';
      if(Lieu::where('id',$id)->delete()){
        
            Mail::send('mail', ['title' => $title, 'lieu_name' => $lieu_name]
                , function ($message) use ($email)
                {
                    $message->to($email)->subject('Lieu Supprimé');

                });
            return back();
        }
        else
            return back();

      }    
      
  

 public function mailsupprimertrajet($id){
         $trajet=trajet::where('id',$id)->with('user')->first();
      //dd($lieu);
      $email=$trajet->user->email;
      
      $trajet_name=$trajet->nom;
      $title='trajet Supprimé';
      if(trajet::where('id',$id)->delete()){
        
            Mail::send('mailtrajet', ['title' => $title, 'trajet_name' => $trajet_name]
                , function ($message) use ($email)
                {
                    $message->to($email)->subject('trajet Supprimé');

                });
            return back();
        }
        else
            return back();

      
 
    
  }
      public function mailsupprimermoyen($id){
      $Moyen_transport=moyen_transport::where('id',$id)->with('user')->first();
      //dd($lieu);
      $email=$Moyen_transport->user->email;
      
      $moyen_name=$Moyen_transport->type;
      $title='moyen Supprimé';
      if(moyen_transport::where('id',$id)->delete()){
        
            Mail::send('mailmoyen', ['title' => $title, 'moyen_name' => $moyen_name]
                , function ($message) use ($email)
                {
                    $message->to($email)->subject('moyen Supprimé');

                });
            return back();
        }
        else
            return back();

      }    
    public function lieuaccepter($id){
      $lieu=Lieu::where('id',$id)->with('user')->first();
      //dd($lieu);
      $email=$lieu->user->email;
      
      $lieu_name=$lieu->nom;
      $title='Lieu Accepter';
       $lieu=Lieu::find($id);
      $lieu->confirm='1';
      if( $lieu->confirm='1'){
        
            Mail::send('mailaccepter', ['title' => $title, 'lieu_name' => $lieu_name]
                , function ($message) use ($email)
                {
                    $message->to($email)->subject('Lieu Accepter');

                });
            return back();
        }
        else
            return back();

      }    
      
 
     public function mailaccaptertrajet($id){
         $trajet=trajet::where('id',$id)->with('user')->first();
      //dd($lieu);
      $email=$trajet->user->email;
      
      $trajet_name=$trajet->depart;
      $title='trajet ajouter';
         $trajet=Trajet::find($id);
    $trajet->confirm='1';
      if($trajet->confirm='1'){
        
            Mail::send('mailacceptertrajet', ['title' => $title, 'trajet_name' => $trajet_name]
                , function ($message) use ($email)
                {
                    $message->to($email)->subject('trajet Accepter');

                });
            return back();
        }
        else
            return back();

      
 
    
  }
     public function mailaccaptermoyen($id){
      $Moyen_transport=moyen_transport::where('id',$id)->with('user')->first();
      //dd($lieu);
      $email=$Moyen_transport->user->email;
      
      $moyen_name=$Moyen_transport->type;
      $title='moyen Supprimé';
      if(moyen_transport::where('id',$id)->delete()){
        
            Mail::send('mailmoyen', ['title' => $title, 'moyen_name' => $moyen_name]
                , function ($message) use ($email)
                {
                    $message->to($email)->subject('moyen Supprimé');

                });
            return back();
        }
        else
            return back();

      }    
      

}