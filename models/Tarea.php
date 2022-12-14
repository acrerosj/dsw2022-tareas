<?php
class Tarea {
  public $titulo;
  public $fin;

  function __construct($titulo)
  {
    $this->titulo = $titulo;
    $this->fin = false;
  }
}