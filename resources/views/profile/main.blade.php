<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
  <link href="./css/main.css" rel="stylesheet">
  <script src="./js/main.js"></script>
</head>
<body>

<nav>
  <h1>Bienvenido, {{ $nombre }}</h1>
  <button><a href="logout" type="button">Cerrar Sesion</a></button>
</nav>

<div class="menu">
    @yield('menu')
</div>

<div class="promedio">
  <center><h1>Promedio:</h1> {{ $promedio }}</center>
</div>




</body>
</html>