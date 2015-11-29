@extends('main_alumno')

@section('menu')
  <div class="menu-group active">
    <a href="principal">Inicio</a>
  </div>
  <div class="menu-group">
    <a href="perfil">Perfil</a>
  </div>
  <div class="menu-group">
    <a href="calificaciones">Calificaciones</a>
  </div>
@endsection

@section('init')
  <h1>Bienvenido a la plataforma NetSchool</h1>
  <p>
    Para comenzar, eliga una opción de su menu lateral izquierdo.
  </p>
@endsection
