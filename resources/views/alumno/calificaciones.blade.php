<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
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

  <div class="promedio">
    <center><h3>Materia:</h3> {{ $nombre_materia }}</center>
    <center><h3>Calificacion 1:</h3> <?php echo $arreglo[1]->calificacion_1; ?></center>
    <center><h3>Calificacion 2:</h3> <?php echo $arreglo[1]->calificacion_2; ?></center>
    <center><h3>Calificacion 3:</h3> <?php echo $arreglo[1]->calificacion_3; ?></center>
  </div>

</body>
</html>
