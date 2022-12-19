<?php
class Trabajo extends Tarea {
  public $fecha;

  public function __construct($titulo, $fecha) 
  {
    parent::__construct($titulo);
    $this->fecha = $fecha;
  }
}