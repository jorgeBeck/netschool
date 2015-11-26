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

  <div class="promedio">
   <?php for ($i=0; $i < $arreglo[4]; $i++) {?>
   <center><h3>Materia:</h3> <?php
   switch ($arreglo[$i]->id_materia){
   case 1: echo 'Español';break;
   case 2: echo 'Matematicas';break;
   case 3: echo 'Programacion';break;
   case 4: echo 'Filosofia';break;
   case 5: echo 'Historia';break;
   } ?> </center>
   <center><h3>Calificacion 1: <?php echo $arreglo[$i]->calificacion_1; ?></center></h3>
   <center><h3>Calificacion 2: <?php echo $arreglo[$i]->calificacion_2; ?></center></h3>
   <center><h3>Calificacion 3: <?php echo $arreglo[$i]->calificacion_3; ?></center></h3>
   <?php } ?>
   </div>



</body>
</html>
