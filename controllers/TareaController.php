<?php
require_once('models/Tarea.php');

class TareaController {
  public $tareas;

  public function __construct()
  {
    // $this->tareas = [
    //   new Tarea('Corregir examen PHP'),
    //   new Tarea('Corregir examen Javascript'),
    //   new Tarea('Poner notas DSW'),
    //   new Tarea('Poner notas DEW')
    // ];
    $this->tareas = isset($_SESSION['tareas']) ? $_SESSION['tareas'] : [];
  }

  public function listado() {
    $tareas = $this->tareas;
    require('views/listado.php');
  }

  public function formCrear() {
    require('views/crear.php');
  }

  public function crearTarea($titulo) {
    $nuevaTarea = new Tarea($titulo);
    $_SESSION['tareas'][] = $nuevaTarea;
    $this->tareas = $_SESSION['tareas'];
    header('Location: /');
  }

  public function eliminarTarea($index) {
    array_splice($this->tareas, $index, 1);
    $_SESSION['tareas'] = $this->tareas;
    header('Location: /');
  }

  public function finalizarTarea($index) {
    $this->tareas[$index]->fin = true;
    $_SESSION['tareas'] = $this->tareas;
    header('Location: /');
  }
}