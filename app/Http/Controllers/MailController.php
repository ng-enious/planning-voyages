<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\Remenber;

class MailController extends Controller
{
   
    public function testmail(){
    $mail='njoumanjouma942@gmail.com';
    Mail::to($mail)->send (new Remenber);
 
    
  }
}