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
        <label for="name">Usuario</label>
      </div>
      <br>

      <div class="input-field">
        <i class="material-icons prefix">lock</i>
        <input type="password" id="txtPassword" name="txtPassword" >
        <label for="pass">Contraseña</label>
        <br><br>
        <a class='teal-text' href='#!'><b>¿Olvidó Su Contraseña?</b></a>
      </div>
      <a class="btn waves-light waves-effect btn-large teal darken-2" id="btnIniciar" name="btnIniciar">Ingresar</a>
    </form>
  </div>
</div>
  <!-- navbar -->
  <ul class="sidenav" id="mobile-demo">
    <br>
    <br>
    <br>
    <li><a href="#!" class="modal-trigger"><i class="material-icons left">home</i>Inicio</a></li>
    <li><a href="#!"><i class="material-icons left">fitness_center</i>Gimnasios</a></li>
    <li><a href="#!"><i class="material-icons left">public</i>Torneos</a></li>
    <li><a href="#!"><i class="material-icons left">info_outline</i>Asistencia</a></li>
    <li><a href="#login" class="modal-trigger"><i class="material-icons left" href="#login">people</i>Iniciar sesión</a></li>
  </ul>
  <div class="navbar-fixed">
    <nav class=" teal darken-1">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo white-text"><img src="Img/Logo2.png"/></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#inicio"><i class="material-icons left">home</i>Inicio</a></li>
          <li><a href="#gimnasios"><i class="material-icons left">fitness_center</i>Gimnasios</a></li>
          <li><a href="#torneos"><i class="material-icons left">public</i>Torneos</a></li>
          <li><a href="#" id="asistencia"><i class="material-icons left">info_outline</i>Asistencia</a></li>
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

<div class="row" id="ro">
  <div class="co black-text">
    <div class="container">
      <h5 class="center-align tit"><b>Misión</b></h5>
      <div class="divider grey lighten-2"></div>
      <br><br>
      <span>El software para el gimnasio Energetic Body Gym, es una aplicación web que permite agilizar, validar, controlar y realizar seguimientos a las actividades relacionadas en el gimnasio y las actividades deportivas organizadas por el área de bienestar de aprendices, donde los usuarios puedan encontrar sus rutinas, recomendaciones alimenticias, jornadas deportivas como torneos, horarios, campañas de buenas prácticas saludables entre otras. En el centro de la industria la empresa y los servicios Sena Huila.</span>      
    </div>
  </div>
  <div class="co black-text">
      <div class="container">
        <h5 class="center-align tit"><b>Visión</b></h5>
        <div class="divider grey lighten-2"></div>
        <br><br>
        <span>Para el 2019 el Sena implementa un software para la gestión del gimnasio y actividades deportivas, implementando las herramientas TIC para el mejoramiento de los procesos manuales que se están llevando actualmente.</span>
      </div>
  </div>
</div>

  <div id="inicio">
    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
          <div class="container">
            <br><br><br>
            <h4 class="header center white-text text-lighten-2">¿Que es Energetic Body Gym?</h4>
            <div class="row center">
              <h5 class="header col s12 light white-text" style="text-align: justify;">Energetic Body GYM es un aplicativo que permite agilizar, validar, controlar y realizar seguimientos a las actividades relacionadas con el gimnasio y las actividades deportivas organizadas por el área de bienestar de aprendices, del Centro de la Industria la Empresa y los Servicios SENA Huila.</h5>
            </div>
          </div>
        </div>
        <div class="parallax"><img src="Img/Carousel/parallax.jpg" alt="Unsplashed background img 1"></div>
      </div>  
  </div>
  <div class="container">
  </div> 
  <br/>
  <div class="row">
    <div class="col s12">
      <br/>
      <div id="gimnasios">        
        <div class="row">
          <div class="col s12">
            <h5 class="center-align"><b>Gimnasios</b></h5>
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
                  <span class="card-title activator grey-text text-darken-4">GIMNASIO CIES<i class="material-icons right">more_vert</i></span>
                  <div class="row">
                    <div class="col s12">
                      <p>Gimnasio, sede comercio.</p>
                    </div>
                    <div class="col s12">
                      <span class="left-align grey-text text-darken-4"><b>Ubicación</b></span>
                      <h6 class="center-align">Carrera 5a. Avenida La Toma Neiva</h6>
                    </div>
                    <div class="col s12">
                      <span class="left-align grey-text text-darken-4"><b>Tels:</b></span>
                      <h6 class="center-align">57 8 875 7154 - 875 7005</h6>
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
                  <span class="card-title activator grey-text text-darken-4">Gimnasio Comercio<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title activator grey-text text-darken-4">GIMNASIO COMERCIO<i class="material-icons right">more_vert</i></span>
                  <div class="row">
                    <div class="col s12">
                      <p>Gimnasio, sede comercio.</p>
                    </div>
                    <div class="col s12">
                      <span class="left-align grey-text text-darken-4"><b>Ubicación</b></span>
                      <h6 class="center-align">Carrera 5a. Avenida La Toma Neiva</h6>
                    </div>
                    <div class="col s12">
                      <span class="left-align grey-text text-darken-4"><b>Tels:</b></span>
                      <h6 class="center-align">57 8 875 7154 - 875 7005</h6>
                    </div>
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
  <div id="torneos">
    
    <div class="container">
      <div class="divider grey lighten-2"></div>
    </div> 
    <br/>
    <div class="row center">
      <div class="col s12">
        <h5><b>Nuestros Torneos</b></h5>
        <br>
        <div class="container">
          <div class="row ">
            <div class="col s12">    
                <p class="center-align" style="text-align: justify;">
                  Nuestra página también cuenta con una sección de torneos, donde  encontraras todo acerca de las actividades deportivas  que se van a realizar en nuestro centro, lo cual  brinda a los profesionales de apoyo, aprendices y a todo el equipo de bienestar de aprendices, un control en los procesos que se realizan para llevar acabo los torneos.
                </p>          
            </div>
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