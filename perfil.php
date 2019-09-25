
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sigma - Perfil de Usuario</title>
    <link rel="stylesheet" href="css/perfil.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,600,700&amp;display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
  </head>
  <body>
    <header>
      <a href="preguntas.php"><ion-icon name="help-circle-outline" size="large" role="img" class="md icon-large hydrated" aria-label="Necesita ayuda?"></ion-icon></a>
      <h1>Sigma</h1>
      <ion-icon name="ios-search" size="large" role="img" class="md icon-large hydrated" aria-label="search"></ion-icon>
    </header>

    <div class="banner">
      <div class="banner-img">
        <img src="img/profile.png" alt="Perfil">
      </div>
      <div class="banner-text">
        <h2>Peter Parker</h2>
      </div>
    </div>

    <div class="sesion">
      <a href="login.php"><b>Iniciar sesión</b></a>
      <p>o</p>
      <a href="registro.php"><b>Registrarse</b></a>
    </div>
    <div class="opciones">

        <div class="opcion">
          <ion-icon class="icon" name="card"></ion-icon>
          <p>Datos de pago</p>
        </div>
        <div class="opcion">
          <ion-icon class="icon" name="home"></ion-icon>
          <p>Datos de envío</p>
        </div>
        <div class="opcion">
          <ion-icon class="icon" name="cube"></ion-icon>
          <p>Estados de mis pedidos</p>
        </div>
        <div class="opcion">
          <ion-icon class="icon" name="key"></ion-icon>
          <p>Cambiar contraseña</p>
        </div>

    </div>

    <!-- NOTE: Inicio de barra de navegacion -->
    <div class="nav-menu">
      <div><a href="home.php"><ion-icon class="nav-icon" name="home"></ion-icon></a></div>
      <div><a href="list.php"><ion-icon class="nav-icon" name="list"></ion-icon></a></div>
      <div><a href="cart.php"><ion-icon class="nav-icon" name="cart"></ion-icon></a></div>
      <div><a href="perfil.php"><ion-icon class="nav-icon" name="person"></ion-icon></a></div>
    </div>


  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
