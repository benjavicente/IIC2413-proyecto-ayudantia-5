<?php
require_once('../__init__.php');

// Vemos si se esta mandando el form o se está recibiendo
// https://stackoverflow.com/questions/1372147/check-whether-a-request-is-get-or-post

$request_method = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
if ($request_method  === 'POST') {
  // Aquí se tendría que buscar el id del usuario en la BDD con el mail y la contraseña
  $user_id = 1;
  $user_name = "Ash";
  // Se guardan estos valores en la sesión
  $_SESSION['user_id'] = $user_id;
  $_SESSION['user_name'] = $user_name;
  // Como inicio sesión, lo mandamos devuelta a la página que estaba
  go_back_and_exit();
} elseif ($request_method === 'GET') {
  // Es importante que este código, que modifica el header
  // se ejecute antes de mandar trozos de HTML.
  if (isset($_SESSION['user_id'])) {
    go_home();
  } else {
    // En este caso, que se trata de obtener la página de inicio de sesión
    // y no hay una sesión iniciada, se muestra el form
    include('./../templates/header.php'); ?>
    <!-- https://bulma.io/documentation/columns -->
    <div class="columns is-mobile is-centered is-vcentered cover-all">
      <div class="column is-half">
        <!-- https://bulma.io/documentation/form/general/ -->
        <form method="POST">
          <div class="field">
            <label class="label">Nombre de usuario</label>
            <div class="control">
              <input class="input" type="text" name="username">
            </div>
          </div>
          <div class="field">
            <label class="label">Contraseña</label>
            <div class="control">
              <input class="input" type="password" name="password">
            </div>
          </div>
          <button class="button is-primary" type="submit" name="login">Login</button>
        </form>
      </div>
    </div>
    <?php include('./../templates/footer.php'); ?>
<?php }
} ?>
