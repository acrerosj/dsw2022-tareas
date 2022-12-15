<style>
    th{
        width: 15rem;
        text-align: left;
        border-bottom: 1px solid black;
    }
    td{
        width: 15rem;
    }
</style>

<h1>Listado de Tareas</h1>
<p>
  <button>
    <a href="/index.php/tarea">Crear nueva tarea</a>
  </button>
</p>
<table>
    <tr>
        <th>Título</th>
        <th>Acciones</th>
    </tr>
<?php
  foreach($tareas as $num => $tarea):
?>
    <tr>
        <td><?php echo $tarea ?></td>
        <td>
          <a href="/index.php/deletetarea/<?=$num?>">Eliminiar</a>
          <a href="/index.php/finalizartarea/<?=$num?>">Finalizar</a>
        </td>
    </tr>
<?php
  endforeach;
?>
</table>