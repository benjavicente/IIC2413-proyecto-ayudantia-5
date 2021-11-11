<?php

$base_path = '/~grupo157';

function go_back_and_exit() {
  global $base_path;
  $back = $_SERVER['HTTP_REFERER'] ?? $base_path;
  header("Location: " . $back);
  exit();
}

function go_home() {
  global $base_path;
  header("Location: " . $base_path . '/');
  exit();
}

session_start();

// Cargamos los datos para poder iniciar la BDD
require_once __DIR__ . "/config/data.php";

// Se conecta a la BDD
// require_once __DIR__ . "./config/conexion.php";
