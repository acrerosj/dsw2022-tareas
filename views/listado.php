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
    require('views/tarea.php');
    if ($tarea instanceof Trabajo) {
      echo "Trabajo";
    }
  endforeach;
?>
</div>
<?php require('views/footer.php'); ?>