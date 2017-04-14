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
    lieu::where('id',$id)->delete();
       $mail='njoumanjouma942@gmail.com';
      Mail::to($mail)->send ( new Remenber);   
    return back();
   
 
    
  }
      public function mailsupprimertrajet($id){
     trajet::where('id',$id)->delete();
       $mail='njoumanjouma942@gmail.com';
      Mail::to($mail)->send ( new Remenbertrajet);   
    return back();
   
 
    
  }
      public function mailsupprimermoyen($id){
    Moyen_transport::where('id',$id)->delete();
       $mail='njoumanjouma942@gmail.com';
      Mail::to($mail)->send ( new Remenbermoyen);   
    return back();
   
 
    
      }

}