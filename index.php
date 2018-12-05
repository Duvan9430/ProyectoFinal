<?php 
session_start();

if(isset($_SESSION['rolLogueado'])){
  if ($_SESSION['rolLogueado'] == 1) {
    header('Location: vista/MenuFrm.php');
  } else if($_SESSION['rolLogueado'] == 2){
    header('Location: vista/MenuFrm.php');
  } else if($_SESSION['rolLogueado'] == 3){
    header('Location: vista/MenuFrm.php');
  } else if($_SESSION['rolLogueado'] == 4){
    header('Location: vista/MenuFrm.php');
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Energetic Body Gym</title>
	<link rel="icon" href="Img/Logo2.png">
	<link rel="stylesheet" type="text/css" href="css/Librerias/materialize.min.normalmodal.css">
	<link rel="stylesheet" type="text/css" href="css/Librerias/bitnami.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">

</head>
<body class=" grey lighten-5">

<!--Boton qaAAAAAAAA-->
<!-- hOLA -->
<div class="fixed-action-btn">
	<a class="btn-floating btn-large red Sesion">
		<i class="large material-icons">person_pin</i>
	</a>
<ul>
	<li><a class="btn-floating orange btn modal-trigger tooltipped" data-position="left" data-tooltip="Iniciar Sesión" href="#login"><i class="material-icons">vpn_key</i></a></li>
	<li><a class="btn-floating teal btn modal-trigger tooltipped" data-position="left" data-tooltip="Inicio" href="#!"><i class="material-icons">home</i></a></li>
</ul>
</div>

<!-- Modal Inicio Sesión-->
<div id="login" class="modal ">
  <h5 class="modal-close">&#10005;</h5>
  <div class="modal-content center">
    <h4 class="teal-text">Iniciar Sesión</h4>
    <br>

    <form id="frmLogin">

      <div class="input-field">
        <i class="material-icons prefix">person</i>
        <input type="text" id="txtUsuario" name="txtUsuario">
        <label for="name">Username</label>
      </div>
      <br>

      <div class="input-field">
        <i class="material-icons prefix">lock</i>
        <input type="password" id="txtPassword" name="txtPassword" >
        <label for="pass">Password</label>
        <br><br>
        <a class='teal-text' href='#!'><b>¿Olvidó Su Contraseña?</b></a>
      </div>
      <a class="btn waves-light waves-effect btn-large teal darken-2" id="btnIniciar" name="btnIniciar">Ingresar</a>
    </form>
  </div>
</div>

   <!--Carousel-->
   <div class="slider">
    <ul class="slides">
      <li>
        <img src="Img/Carousel/gym.jpg"> <!-- random image -->
        <div class="caption center-align">
          
        </div>
      </li>

      <li>
        <img src="Img/Carousel/orig.jfif"> <!-- random image -->
        <div class="caption center-align">
          <h3>Disfruta de nuestros eventos SENA!</h3>
          <h5 class="light grey-text text-lighten-3">Motivate a participar en ellos.</h5>
        </div>
      </li>

      <li>
        <img src="Img/Carousel/man.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Recuerda seguir las recomendaciones alimenticias...!</h3>
          <h5 class="light grey-text text-lighten-3">No hay cambio de peso si no hay cambio de habito.</h5>
        </div>
      </li>

      <li>
        <img src="Img/Carousel/prueba.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Participa de nuestras actividades deportivas</h3>
          <h5 class="light grey-text text-lighten-3">No olvides inscribirte en ellas.</h5>
        </div>
      </li>
      <li>
        <img src="Img/Carousel/ey.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>¿Que esperas para registrarte?</h3>
          <h5 class=" grey-text text-lighten-1">El esfuerzo de hoy...es el exito de mañana.</h5>
        </div>
      </li>
    </ul>
  </div>
  <!-- navbar -->
  <ul class="sidenav" id="mobile-demo">
    <li><a href="#!"><i class="material-icons left">home</i>Inicio</a></li>
    <li><a href="#!"><i class="material-icons left">fitness_center</i>Gimnasios</a></li>
    <li><a href="#!"><i class="material-icons left">public</i>Torneos</a></li>
    <li><a href="#!"><i class="material-icons left">info_outline</i>Contáctenos</a></li>
    <li><a href="#!"><i class="material-icons left">people</i>Iniciar sesión</a></li>
  </ul>
  <nav>
    <div class="nav-wrapper teal darken-3">
      <a href="#!" class="brand-logo white-text"><img src="Img/Logo2.png"/><b>Energic Body Gym</b></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#!"><i class="material-icons left">home</i>Inicio</a></li>
        <li><a href="#!"><i class="material-icons left">fitness_center</i>Gimnasios</a></li>
        <li><a href="#!"><i class="material-icons left">public</i>Torneos</a></li>
        <li><a href="#!"><i class="material-icons left">info_outline</i>Contáctenos</a></li>
        <li><a href="#!"><i class="material-icons left">people</i>Iniciar sesión</a></li>
      </ul>
    </div>
  </nav>

<!--Novedades-->
<div class="container section">
	<h5 align="center">Novedades</h5>
	<div class="divider orange"></div>
    <div class="row">
      <div class="col s4">
        <br>
          <div class="card">
            <div class="card-image">
              <img src="Img/Noticias/Not1.jpg">
            </div>
              <div class="card-content">
                <p align="center">En fase de desarrollo... </p>
              </div>
                <div class="card-action orange" align="center">
                  <a href="#" class="white-text">Ver Más</a>
                </div>
            </div>
        </div>
        <div class="col s4">
          <br>
          <div class="card">
            <div class="card-image">
              <img src="Img/Noticias/gimSena.jpg">
            </div>
              <div class="card-content">
                <p align="center">Lorem ipsum dolor sit amet.</p>
              </div>
                <div class="card-action orange" align="center">
                  <a href="#" class="white-text">Ver Más</a>
                </div>
            </div>
      </div>

      <div class="col s4">
        <br>
          <div class="card">
            <div class="card-image">
              <img src="Img/Noticias/Not2.jpg">
            </div>
              <div class="card-content">
                <p align="center">Lorem ipsum dolor sit amet...</p>
              </div>
                <div class="card-action orange" align="center">
                  <a href="#" class="white-text">Ver Más</a>
                </div>
            </div>
      </div>
    </div>
</div>

<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br><br>
        <h2 class="header center white-text text-lighten-2">¿Que es Energetic Body Gym?</h2>
        <div class="row center">
          <h5 class="header col s12 light white-text">Energetic Body GYM es un aplicativo que permite agilizar, validar, controlar y realizar seguimientos a las
          actividades relacionadas con el gimnasio y las actividades deportivas organizadas por el área de bienestar de aprendices, del Centro de la Industria la Empresa y los Servicios SENA Huila.</h5>
        </div>
        

      </div>
    </div>
    <div class="parallax"><img src="Img/Carousel/parallax.jpg" alt="Unsplashed background img 1"></div>
  </div>

</body>
<footer class="page-footer">
    <div class="container">
        <div class="row">
			<div class="col l6 s12">
				<h5 class="white-text">EBG</h5>
				<p class="grey-text text-lighten-4">Energetic Body Gym</p>
	        </div>
        </div>
        </div>
	<div class="footer-copyright">
        <div class="container">
			<a href="http://www.sena.edu.co/" target="_blank" class="grey-text text-lighten-4 left">
		        <h6>&nbsp;&nbsp;© ADSI 1446435</h6>
		    </a>
	        <a href="http://www.sena.edu.co/" target="_blank" class="grey-text text-lighten-4 right">
		       	<img src="Img/Logo.png" width="40px" height="40px">
		    </a>
		    <a href="http://oferta.senasofiaplus.edu.co/" target="_blank" class="grey-text text-lighten-4 right">
		    	<img src="img/developers-V2.png" width="55px" height="46px">
		    </a>
        </div>
    </div>
</footer>
<script type="text/javascript" src="js/Librerias/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/Librerias/materialize.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/iniciarSesion.js"></script>
</html>