<?php
require_once('controllers/TareaController.php');

session_start();

$controller = new TareaController();

if (isset( $_SERVER['PATH_INFO'])) {
  $partes = explode('/', $_SERVER['PATH_INFO']);
  if ($partes[1]=='tarea') {
    if (empty($_POST['titulo'])) {
      $controller->formCrear();
    } else {
      $controller->crearTarea($_POST['titulo']);
    }
  } else {
    $controller->listado();
  }
} else {
  $controller->listado();
}

