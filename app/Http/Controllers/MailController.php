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
    public function lieuaccepter($id)
    {
       $lieu=Lieu::find($id);
    $lieu->confirm='1';
     
             if($lieu->save())
             {
      
      return redirect('/paginationlieu');}

    }

     public function mailaccaptertrajet($id)
           {
       $trajet=trajet::find($id);
    $trajet->confirm='1';
     
             if($trajet->save())
             {
      
      return redirect('/paginationtrajet');}

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