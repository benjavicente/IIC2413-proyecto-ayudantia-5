<!DOCTYPE html>

<html class="has-navbar-fixed-top">
    <head>
        <meta charset='UTF-8'>
        <title>Ayudantía 5 - PokeDB</title>
        <!-- Para que el link se comparta bonito -->
        <meta property="og:title" content="Ayudantía 5 - PokeDB"/>
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="https://fondosmil.com/fondo/14762.jpg"/>
        <!-- Estilos -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
        <link rel='stylesheet' href="<?php echo '/~grupo157' . '/styles/style.css'?>">
        <script defer src="<?php echo '/~grupo157' . '/js/bulma.js'?>"></script>
    </head>
  <body id="top">
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
            <a class="navbar-item" href="/~grupo157/#top">
              Inicio
            </a>
            <a class="navbar-item" href="https://github.com/IIC2413/Syllabus-2021-2/issues">
              Foro
            </a>
          </div>
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">
                <a class="button is-primary">
                  <strong>Registrarse</strong>
                </a>
                <a class="button is-light">
                  Iniciar sesión
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
