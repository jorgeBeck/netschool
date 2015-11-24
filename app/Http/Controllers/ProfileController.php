<?php

namespace App\Http\Controllers;

use DB;
use Request;
use Redirect;
use Session;
use App\Http\Controllers\Controller;
use App\Http\Helpers\Helper;

class ProfileController extends Controller
{

    public function data(){
      $users = DB::table('users')
      ->select('id','name','email','nombre')
      ->where('id','=',session('id'))
      ->get();

      Request::session()->has('id',$users[0]->id);
      $datos = $users[0]->id.$users[0]->nombre;
      $nombre = $users[0]->nombre;
      return $nombre;
    }

    public function devolver(){
      $nombre = $this->data();
      return view('principal', compact('nombre'));
      return Helper::isLogged();
    }


}
