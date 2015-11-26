<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  <link href="../css/main.css" rel="stylesheet">
  <link href="../css/profile.css" rel="stylesheet">
  <script src="../js/main.js"></script>
</head>
<body>

<nav>
  <h1>Bienvenido, {{ $nombre }}</h1>
  <button><a href="../logout" type="button">Cerrar Sesion</a></button>
</nav>

<div class="menu">
    @yield('menu')
</div>

<div class="center">
  <h1>Bienvenido a la plataforma NetSchool</h1>
  <p>Para comenzar, selecciona una categoria del menu de la izquierda.</p>
</div>

<div class="grupos">
<div class="center">
  <a href="">Grupo</a>
  <a href="">Grupo</a>
  <a href="">Grupo</a>
</div>
</div>




</body>
</html>
