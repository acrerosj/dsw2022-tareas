<div class="tarea 
  <?php echo $tarea->fin ? "finalizada" : "activa" ?>
">
  <h1>
    <?php
      echo $tarea->titulo;
    ?>
  </h1>
  <a href="/index.php/deletetarea/<?=$num?>">Eliminiar</a>
  <a href="/index.php/finalizartarea/<?=$num?>">Finalizar</a>
</div>