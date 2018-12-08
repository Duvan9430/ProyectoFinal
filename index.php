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

<!-- Modal Inicio Sesión-->
<div id="login" class="modal">
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
  <!-- navbar -->
  <ul class="sidenav" id="mobile-demo">
    <li><a href="#!" class="modal-trigger tooltipped"><i class="material-icons left">home</i>Inicio</a></li>
    <li><a href="#!"><i class="material-icons left">fitness_center</i>Gimnasios</a></li>
    <li><a href="#!"><i class="material-icons left">public</i>Torneos</a></li>
    <li><a href="#!"><i class="material-icons left">info_outline</i>Contáctenos</a></li>
    <li><a href="#login" class="modal-trigger tooltipped"><i class="material-icons left" href="#login">people</i>Iniciar sesión</a></li>
  </ul>
  <div class="navbar-fixed">
    <nav class=" teal darken-1">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo white-text"><img src="Img/Logo2.png"/></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#!"><i class="material-icons left">home</i>Inicio</a></li>
          <li><a href="#!"><i class="material-icons left">fitness_center</i>Gimnasios</a></li>
          <li><a href="#!"><i class="material-icons left">public</i>Torneos</a></li>
          <li><a href="#!"><i class="material-icons left">info_outline</i>Contáctenos</a></li>
          <li><a href="#login" class="modal-trigger"><i class="material-icons left">people</i>Iniciar sesión</a></li>
        </ul>
      </div>
    </nav>
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

<!--Novedades-->
  <br>
  <br>
  <br>
<div class="container section">
	<div class="row">
   <div class="col s12 m6">
     <h6 class="center-align">Misión</h6>
     <div class="divider grey lighten-1"></div>
   </div>
   <div class="col s12 m6">
     <h6 class="center-align">Visión</h6>
     <div class="divider grey lighten-1"></div>
   </div>
  </div>
  <br>
  <div class="row">
    <div class="col s12 m6">
      <h6 class="center-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
    </div>
    <div class="col s12 m6">
      <h6 class="center-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
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
  <br/><br/>
  <div class="container">
    <div class="divider grey lighten-2"></div>
  </div> 
  <br/>
  <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="col s12">
          <br/>
          <h6 class="center-align">Identidad</h6>
          <!-- <div class="divider grey lighten-2"></div> -->
          <div class="container">
            <h4 class="center-align">Ingresa a EBG</h4>
            <p class="center-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
      </div>
      <br/><br/>
      <div class="container">
        <div class="divider grey lighten-2"></div>
      </div> 
      <br/>
      <div class="row">
        <div class="col s12">
          <h6 class="center-align">Gimnasios</h6>
        </div>               
      </div>
      <div class="row">
        <div class="container">
          <div class="col s6">          
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator responsive-img" src="img/gimnasios/Gimnasios/Gym CIES.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Gimnasio CIES<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title activator grey-text text-darken-4">Gimnasio CIES<i class="material-icons right">more_vert</i></span>
                <div class="row">
                  <div class="col s9">
                    <p>Gimnasio del centro de la empresa, la industria y los servicios</p>
                  </div>
                  <div class="col s9">
                    <span class="left-align grey-text text-darken-4"><b>Ubicación</b></span>
                    <h6 class="center-align">Lorem ipsum dolor sit amet</h6>
                  </div>
                </div>
              </div>
            </div>          
          </div>
          <div class="col s6">          
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator responsive-img" src="img/gimnasios/Gimnasios/Gym CIES.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Gimnasio CIES<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title activator grey-text text-darken-4">Gimnasio CIES<i class="material-icons right">more_vert</i></span>
                <div class="row">
                  <div class="col s9">
                    <p>Gimnasio del centro de la empresa, la industria y los servicios</p>
                  </div>
                  <div class="col s9">
                    <span class="left-align grey-text text-darken-4"><b>Ubicación</b></span>
                    <h6 class="center-align">Lorem ipsum dolor sit amet</h6>
                  </div>
                </div>
              </div>
            </div>          
          </div>
        </div>
      </div>               
    </div>      
  </div>
  <br/><br/>
  <div class="container">
    <div class="divider grey lighten-2"></div>
  </div> 
  <br/>
  <div class="row center">
    <div class="col s12">
      <h6>EBG para aprendices</h6>
      <h4><b>Para el seguimiento de Torneos</b></h4>
      <br>
      <div class="container">
        <div class="row center">
          <div class="col s6">          
            <span>Energetic Body Gym brinda a los profesionales de apoyo deportivos, aprendices y a todo el equipo de P&P, un control en los procesos que se realizan para llevar acabo los torneos.</span>         
          </div>
          <div class="col s6 center-align">
            <button type="button" id="GoToTorneos" name="GoToTorneos" class="btn green lighten-2">Ir a Torneos</button>
          </div>
        </div>
      </div>      
    </div>
  </div>
 <!--  <div class="parallax-container">
    <div class="parallax">
      <img src="img/gimnasios/Gimnasios/gym-senacies.jpeg">
    </div>
  </div> -->
  <div class="row">
    <div class="col s12"></div>
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