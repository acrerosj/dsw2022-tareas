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
    </tr>
<?php
  foreach($tareas as $tarea):
?>
    <tr>
        <td><?php echo $tarea->titulo ?></td>
    </tr>
<?php
  endforeach;
?>
</table>