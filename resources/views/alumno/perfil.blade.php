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

@section('datos_perfil')
  <h2>Nombre: {{$nombre}}</h2>
  <h2>Correo: {{$email}}</h2>
@endsection
