<?php 
 require 'vendor/autoload.php';
  session_start();
echo <<<_INIT
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width,initial-scale=1'>
        <link rel='stylesheet' href='jquery.mobile-1.4.5.min.css'>        
        <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
        <link rel='stylesheet' href='styles.css' type='text/css'>
        <script src='javascript.js'></script>
        <script src='jquery-2.2.4.min.js'></script>
        <script src='jquery.mobile-1.4.5.min.js'></script>       
        

_INIT;
    require_once 'functions.php';
    // Se inicializa la variable userstr con un texto de bienvenida
    //$userstr = '¡Bienvenido Artesano!';
    // Verifica si hay una sesión de usuario abierta
    if (isset($_SESSION['user'])) {
        // Asigna la sesión de usuario abierta a la variable user 
        $user    = $_SESSION['user'];
        // Asigna a la variable loggedin el valor de verdadero ya que encontro una sesión abierta
        $loggedin = TRUE;
        // Modifica la variable userstr con un comentario seguido del nombre del usuario de la sesión abierta
        $userstr  = "Has accesado como: $user";
    }
    // En caso de estar abierto una sesión se asigna el valor falso a la variable loggedin
    else $loggedin = FALSE;

echo <<<_MAIN

        <title> Social Red: $userstr</title>
    </head> 
    <body>
        <div data-role='page'>
            <div data-role='header'>
                <div id='logo' class='center'>
                
                <div class= 'username'>$userstr</div>
            </div>
            <div data-role='content'>
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="portada2.png" class="d-block w-100" alt="" height="600px">
          <div class="carousel-caption d-none d-md-block">
            
            
            
          </div>
        </div>
        <div class="carousel-item">
        
          <img src="tejidofondo.jpg" class="d-block w-100" alt=""height="600px">
          <div class="carousel-caption d-none d-md-block">
            <h2>CURSO TEJIDO</h2>
            <h5>¡Inscríbete ahora para aprender!</h5>
            
            
          </div>
        </div>
        <div class="carousel-item">
        
          <img src="porcelanafondo.jpg" class="d-block w-100" alt="" height="600px">
          <div class="carousel-caption d-none d-md-block">
          <h2>CURSO PORCELANA FRÍA</h2>
          <h5>¡Inscríbete ahora para aprender!</h5>
          </div>
        </div>
      </div>
      <script src="bootstrap/jquery-3.2.1.slim.min.js "></script>
        <script src="bootstrap/popper.min.js" ></script>
        <script src="bootstrap/bootstrap.min.js" ></script>

        <div class="alert alert-dark" role="alert">
        <p align="center"> ¡BIENVENIDO ARTESANO! </p>
</div>

_MAIN;
    if ($loggedin) {
        // En caso de estar en una sesión abierta te muestra las opciones de navegación de la aplicación
echo <<<_LOGGEDIN
        <div class='center'>
            <a data-role='button' data-inline='true' data icon='Home'
            data-transition="slide"
            href='members.php?view=$user'>Inicio</a>
            <a data-role='button' data-inline='true' data icon='user'
            data-transition="slide" href='members.php'>Miembros</a>
            <a data-role='button' data-inline='true' data icon='heart'
            data-transition="slide" href='friends.php'>Amigos</a><br>
            <a data-role='button' data-inline='true' data icon='mail'
            data-transition="slide" href='messages.php'>Mensajes</a>
            <a data-role='button' data-inline='true' data-icon='edit'
            data-transition="slide" href='profile.php'>Editar Perfiles</a>
            <a data-role='button' data-inline='true' data-icon='action'
            data-transition="slide" href='logout.php'>Salir</a>
        </div>
_LOGGEDIN;
    }
    else {
        // En caso de que no este en una sesión de usuario abierta te muestra las opciones principales para registrarte 
echo <<<_GUEST
        <div class='center'>
            <a data-role='button' data-inline='true' data-icon='home'
            data-transition='slide' href='index.php'>Principal</a>
            <a data-role='button' data-inline='true' data-icon='plus'
            data-transition="slide" href='signup.php'>Registrarte</a>
            <a data-role='button' data-inline='true' data-icon='check'
            data-transition="slide" href='login.php'>Accesar</a>
        </div>
        <p class='info'>(Debe estar registrado para accesar a un curso)</p>
_GUEST;
    }
?>
<script src="bootstrap/jquery-3.2.1.slim.min.js "></script>
<script src="bootstrap/popper.min.js" ></script>
<script src="bootstrap/bootstrap.min.js" ></script>
</body>