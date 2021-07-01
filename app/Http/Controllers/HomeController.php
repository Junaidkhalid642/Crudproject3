<?php
namespace App\Http\Controllers;

use App\Http\Controllers\HomeController;
use App\Models\User;

class HomeController extends Controller
{
   public function gethome(){
       $users = User::select('id','name','email')->get();
       return view('home',['users'=>$users]);
   }
      
}
