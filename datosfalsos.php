<?php
  require('models/Tarea.php');
  require('models/Trabajo.php');
  session_start();

    $tareas = [
      new Tarea('Corregir examen PHP'),
      new Tarea('Corregir examen Javascript'),
      new Trabajo('Hacer Web', '21/12/2022'),
      new Tarea('Poner notas DSW'),
      new Tarea('Poner notas DEW')
    ];
    $_SESSION['tareas'] = $tareas;
?>
<a href="/">Volver</a>
<h1>Se han creado los siguientes datos</h1>
<pre>
  <?= print_r($tareas); ?>
</pre>