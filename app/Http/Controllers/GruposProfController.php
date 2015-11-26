<?php

namespace App\Http\Controllers;

use DB;
use Request;
use Redirect;
use Session;
use App\Http\Controllers\Controller;
use App\Http\Helpers\Helper;

class GruposProfController extends Controller
{
  public function data(){

  }

  public function devolver(){
    $users = DB::table('users')
    ->select('id','name','email','nombre')
    ->where('id','=',session('id'))
    ->get();

    Request::session()->has('id',$users[0]->id);
    $datos = $users[0]->id.$users[0]->nombre;
    $nombre = $users[0]->nombre;
    $email = $users[0]->email;
    return view('grupos_prof', ['nombre'=>$nombre,
    'email'=>$email]);
    return Helper::isLogged();
  }
}
