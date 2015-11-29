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

  public function calificaciones(){
   $users = DB::table('curso')
   ->select('id_materia','calificacion_1','calificacion_2','calificacion_3')
   ->where('id', '=', session('id'))
   ->get();
   $tot = count($users);
   $users = $users+[4=>$tot];
   return $users;
   }

  public function materia(){
    $users = DB::table('curso')
    ->select('id_materia','calificacion_1','calificacion_2','calificacion_3')
    ->where('id', '=', session('id'))
    ->get();
      Request::session()->has('id',$users[0]->id_materia);
    if ($users[0]->id_materia == 1) {
      $nombre_materia = 'Español';
    }elseif ($users[0]->id_materia == 2) {
      $nombre_materia = 'Matematicas';
    }
    return $nombre_materia;
  }

  public function devolver(){
    $nombre = $this->data();
    $arreglo = $this->calificaciones();
    $nombre_materia = $this->materia();
    return view('alumno.calificaciones', compact('nombre','arreglo','nombre_materia'));
    return Helper::isLogged();
  }
}
