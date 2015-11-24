<?php

namespace App\Http\Controllers;

use DB;
use Request;
use Redirect;
use Session;
use App\Http\Controllers\Controller;
use App\Http\Helpers\Helper;

class PromedioController extends Controller
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

  public function promedio(){
    $users = DB::table('curso')
    ->select('id_materia','calificacion_1','calificacion_2','calificacion_3')
    ->where('id', '=', session('id'))
    ->get();

    Request::session()->has('id',$users[0]->id_materia);
    $promedio = $users[0]->calificacion_1;
    $promedio2 = $users[0]->calificacion_2;
    $promedio3 = $users[0]->calificacion_3;
    $promedio_total = ($promedio + $promedio2 + $promedio3)/3;
    return $promedio_total;
  }

  public function materia(){
    $users = DB::table('curso')
    ->select('id_materia','calificacion_1','calificacion_2','calificacion_3')
    ->where('id', '=', session('id'))
    ->get();
      Request::session()->has('id',$users[0]->id_materia);
    if ($users[0]->id_materia = 1) {
      $nombre_materia = 'Español';
    }
    return $nombre_materia;
  }

  public function devolver(){
    $nombre = $this->data();
    $promedio_total = $this->promedio();
    $nombre_materia = $this->materia();
    return view('calificacion', compact('nombre','promedio_total','nombre_materia'));
    return Helper::isLogged();
  }
}
