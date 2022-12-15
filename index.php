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
  } elseif ($partes[1]=='deletetarea' && is_numeric($partes[2])) {
    $controller->eliminarTarea($partes[2]);
  } elseif ($partes[1]=='finalizartarea' && is_numeric($partes[2])) {
    $controller->finalizarTarea($partes[2]);    
  } else {
    $controller->listado();
  }
} else {
  $controller->listado();
}

