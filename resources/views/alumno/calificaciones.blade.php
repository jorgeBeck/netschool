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

@section('calificaciones')
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

@endsection
