@extends('login.login')

@section('title', 'Netschool')

@section('sidebar')
    @parent

@endsection

@section('header', 'Bienvenido.')

@section('header2', 'Inicia Sesion.')

@endsection

@section('messages')
@if (Session::has('error_message'))
   <div class="alert alert-info">{{ Session::get('error_message') }}</div>
@endif
@endsection

@section('loginform')
<div class="wrap">
    <form class="formulario" action="login" method="post">
      <div class="input-group">
        <label for="name">Nombre:</label>
        <input type="name" name="name" value="" id="name">
      </div>
      <div class="input-group">
        <label for="password">Contraseña:</label>
        <input type="password" name="password" value="" id="password">
      </div>
      <input type="submit" value="Entrar" id="btn-submit">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
</div>
@endsection
