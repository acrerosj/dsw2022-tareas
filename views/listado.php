<?php require('views/header.php'); ?>
<h1>Listado de Tareas</h1>
<p>
  <button>
    <a href="/index.php/tarea">Crear nueva tarea</a>
  </button>
  <div id="lista">
</p>
<?php
  foreach($tareas as $num => $tarea):
    // if ($tarea instanceof Trabajo) {
    //   require('views/trabajo.php');
    // } else {
    //   require('views/tarea.php');
    // }
    $clase = strtolower(get_class($tarea));
    require('views/'.$clase.'.php');
  endforeach;
?>
</div>
<?php require('views/footer.php'); ?>