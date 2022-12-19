<?php require('views/header.php'); ?>
<h1>Crear una nueva tarea</h1>
<form action="/index.php/tarea/" method="post" name="formcrear">
  <p>
    <label for="titulo">Título: </label>
    <input type="text" name="titulo" id="titulo" required>
  </p>
  <p>
    <input type="radio" name="tipo" value="tarea" id="tarea" checked>
    <label for="tarea">Tarea</label>
    <input type="radio" name="tipo" value="trabajo" id="trabajo">
    <label for="trabajo">Trabajo</label>
  </p>
  <p class="oculto" id="panel-fecha">
    <label for="fecha">Fecha:</label>
    <input type="date" name="fecha" id="fecha">
  </p>
  <p>
    <input type="submit" value="Crear">
  </p>
</form>
<script src="/js/creartarea.js"></script>
<?php require('views/footer.php'); ?>