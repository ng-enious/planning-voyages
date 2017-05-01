<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Lieu;
use App\Moyen_transport;
use App\Trajet;
use Illuminate\Support\Facades\Redirect;


class PaginationController extends Controller
{
  public function rendreAdmin ($id)
  {
    $user=User::find($id);
    $user->role='admin';
    $msg='';
    if($user->save())
    {
      $msg='succes';
       return redirect('/pagination')->with('message', $msg);
    }
    $msg='error';
     return redirect('/pagination')->with('message', $msg);
  }
    public function supprimerAdmin ($id)
  {
    $user=User::find($id);
    $user->role='utilisateur';
    $msg='';
    if($user->save())
    {
      $msg='succes';
      return Redirect::to('/pagination')->with('msg'); 
    }
    $msg='error';
    return Redirect::to('/pagination')->with('msg');
  }
    public function pagination()
    {
      $users= user::paginate(5);
   
      return view ('pagination',compact('users'));
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
     public function paginationmoyen()
    {
      $moyens= Moyen_transport::paginate(5);
   
      return view ('paginationmoyen',compact('moyens'));
    }
  public function postdelete($id)
  {
 
    user::where('id',$id)->delete();
    return back();
  }
    public function postdeletelieu($id)
  {
 
    lieu::where('id',$id)->delete();
    return back();
  }
    public function postdeletemoyen($id)
  {
 
    Moyen_transport::where('id',$id)->delete();
    return back();
  }
  
  public function postdeletetrajet($id)
  {
 
    trajet::where('id',$id)->delete();
    return back();
  }
  public function edituser($id)
  {
    
  $lieu=Lieu::find($id);
    $lieu->confirm='1';
       if($lieu->save())
    {
      $msg='succes';
      return redirect('/pagination')->with('message', $message);
    }
    $msg='error';
    return redirect('/pagination')->with('message', $message);
  }
    public function editmoyen($id)
  {
    
  $moyen=Moyen_transport::find($id);
    $moyen->confirm='1';
       if($moyen->save())
    {
      $msg='succes';
      return redirect('/paginationmoyen')->with('message', $message);
    }
    $msg='error';
    return redirect('/paginationmoyen')->with('message', $message);
  }
    public function edittrajet($id)
  {
    
  $trajet=Trajet::find($id);
    $trajet->confirm='1';
       if($trajet->save())
    {
      $msg='succes';
      return redirect('/paginationtrajet')->with('message', $message);
    }
    $msg='error';
    return redirect('/paginationtrajet')->with('message', $message);
  }
  
 
 


}