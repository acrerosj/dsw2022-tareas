<?php
class Tarea {
  public $titulo;
  public $fin;

  function __construct($titulo)
  {
    $this->titulo = $titulo;
    $this->fin = false;
  }

  function __toString() : string
  {
    $finalizado = $this->fin ? "Finalizado" : "Pendiente";
    return $this->titulo . " - " . $finalizado;
  }
}