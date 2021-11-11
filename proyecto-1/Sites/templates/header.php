<!DOCTYPE html>

<html class="has-navbar-fixed-top">

<head>
  <meta charset='UTF-8'>
  <title>Ayudantía 5 - PokeDB</title>
  <!-- Estilos -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
  <link rel='stylesheet' href="<?php echo $base_path . '/styles/style.css' ?>">
  <script defer src="<?php echo $base_path . '/js/bulma.js' ?>"></script>
  <link rel="icon" href="<?php echo $base_path . '/favicon.svg' ?>">
  <!-- Para que el link se comparta bonito -->
  <meta property="og:title" content="Ayudantía 5 - PokeDB" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://fondosmil.com/fondo/14762.jpg" />
</head>

<body>
  <!-- https://bulma.io/documentation/components/navbar/ -->
  <nav class="navbar is-dark is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <div class="navbar-item">
        PokeDB
      </div>
      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
    <div class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="<?php echo $base_path . '/#top'?>">
          Inicio
        </a>
        <a class="navbar-item" href="<?php echo $base_path . '/consultas/pokemones.php'?>">
          Pokemones
        </a>
        <a class="navbar-item" href="https://github.com/IIC2413/Syllabus-2021-2/issues">
          Foro
        </a>
      </div>
      <div class="navbar-end">
        <div class="navbar-item">
          <!-- Se cambia el navbar cuando hay sesión de usuario -->
          <?php if (isset($_SESSION['user_name'])) { ?>
            <div class="navbar-item has-text-white">
              Hola <?php echo $_SESSION['user_name'] ?>
            </div>
            <form class="buttons" action="<?php echo $base_path . "/logout"?>">
              <input class="button" type="submit" value="Cerrar Sesión">
            </form>
          <?php } else { ?>
            <div class="buttons">
              <a disabled class="button is-primary" title="Esto no está implementado aquí!">
                Registrarse
              </a>
              <a href="<?php echo $base_path . '/login' ?>" class="button is-light">
                Iniciar sesión
              </a>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </nav>
