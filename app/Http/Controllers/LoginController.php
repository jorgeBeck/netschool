<?php

namespace App\Http\Controllers;

use DB;
use Request;
use Redirect;
use Session;
use App\Http\Controllers\Controller;
use App\Http\Helpers\Helper;

class LoginController extends Controller
{
    public function login(){
      $name = Request::input('name','');
      $pass = Request::input('password','');

    $users = DB::table('users')
    ->select('id','privilegios')
    ->where('name','=',$name)
    ->where('password','=',$pass)
    ->get();

    if(count($users) == 1){
      Request::session()->put('id',$users[0]->id);
      Request::session()->put('logged', true);
      if ($users[0]->privilegios == 1){
        return redirect('alumno/principal');
      }elseif ($users[0]->privilegios == 2) {
        return redirect('maestro/principal');
      }
    }else {
      Session::flash('error_message', "Tus datos son incorrectos.");
      return Redirect::to('login');
    }
}

  public function logout(){
    Request::session()->put('logged',false);
    return redirect('login');
  }

  public function logged(){
    return Helper::isLogged();
  }


}
