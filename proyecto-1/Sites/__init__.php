<?php

// Cargamos los datos para poder iniciar la BDD
require_once __DIR__ . "/config/data.php";

// Se conecta a la BDD
require_once __DIR__ . "/config/conexion.php";

// Se crea siempre una sesión
session_start();

// Variables globales
$base_path = '/~grupo157';

// Funciones propias de utilidad
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

/**
 * Crea una tabla HTML a partir de una consulta
 * @param PDOStatement $query
*/
// NOTA: fetch controla como se obtienen los resultados
// https://www.php.net/manual/es/pdostatement.fetch.php
// En este caso, se quiere obtener solo los valores.
function table_from_query($query) { ?>
  <div class="table-container">
    <table class="table">
      <thead>
        <tr>
          <? foreach (range(0, $query->columnCount() - 1) as $col_index) { ?>
            <th><?php echo htmlentities($query->getColumnMeta($col_index)['name']) ?></th>
          <?php } ?>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $query->fetch(PDO::FETCH_ASSOC)) { ?>
          <tr>
            <?php foreach ($row as $value) { ?>
              <th><?php echo htmlentities($value) ?></th>
            <?php } ?>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
<? }
