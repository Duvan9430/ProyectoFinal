<?php 
session_start();

if(isset($_SESSION['rolLogueado'])){

}else{
	header('Location: ../');
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Energetic Body Gym</title>	
	<link rel="stylesheet" type="text/css" href="../css/Librerias/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../css/menu/MenuFrm.css">
	<link rel="stylesheet" type="text/css" href="../css/Librerias/bitnami.css">
</head>
<body>

	<header class="orange darken-4">			
	</header>
	<!--Boton menuSlide-->
		
		<!--<h5 class="center">Aprendices</h5>-->
	<nav>
	<div class="categories-wrapper z-depth-4">
		    <div class="categories-container">
		        <ul class="categories noHover">
		        	<a href="#" class="sidenav-trigger btnMenuM show-on-large" data-target="menu-side"><i class=" material-icons">menu</i></a>
		        	<img src="../img/Logo2.png" class="logo left">
		            <li class="active"><a href="#all"></a></li>
		        </ul>
		    </div>
	    </div>
	</nav>

	<ul id="menu-side" class="sidenav">
		<li>
			<div class="user-view">
				<div class="background orange darken-4">
					<img alt="">
				</div>
				<a href="#">
					<img src="../img/Logo2.png" alt="" id="logo"class="circle">
				</a>
				<a href="">
					<span class="name white-text"><?php echo $_SESSION['nombreUnoLogueado'];?> <?php echo $_SESSION['nombreDosLogueado']; ?>  <?php echo $_SESSION['apellidoUnoLogueado']; ?></span>
				</a>
				<a href="">
					<span class="email white-text"><?php echo $_SESSION['correoLogueado']; ?></span>
				</a>
			</div>
		</li>

		<li><a class="waves-effect waves-teal" id="btnAprendiz" name="btnAprendiz"><i class="material-icons">person</i>Aprendiz</a></li>
		<li><a class="waves-effect waves-orange" id="btnGimnasio" name="btnGimnasio"><i class="material-icons">fitness_center</i>Gimnasio</a></li>
		<li><a class="waves-effect waves-green" id="btnControl" name="btnControl"><i class="material-icons">games</i>Control</a></li>
		<li><a class="waves-effect waves-orange" id="btnEventos" name="btnEventos"><i class="material-icons">event</i>Eventos</a></li>
		<br>
		<br>
		<br>
		<li><a class="waves-effect waves-red top" href="../controlador/loginCerrar.php" id="btnCerrarSesionM"><i class="material-icons">power_settings_new</i>Cerrar Sesión</a></li>
		<!--<li><a class="subheader" href="#">Registros</a></li>

		<li class="no-padding">
			<ul class="collapsible collapsible-accordion">
				<li class="bold">
					<a class="collapsible-header waves-effect waves-teal">Dropdown<i class="material-icons">arrow_drop_down</i></a>
					<div class="collapsible-body">
						<ul>
							<li><a href="#"><i class="material-icons">android</i>Link 1</a></li>
							<li><a href="#"><i class="material-icons">assessment</i>Link 2</a></li>
							<li><a href="#"><i class="material-icons">create</i>Link 3</a></li>
						</ul>					
					</div>
				</li>
			</ul>
		</li>-->
	</ul>


	<div class="container-fluid section" id="contenido" name="contenido">
		<br>

	</div>
	<br>
	<br>
	</body>

	<!--Footer-->
	<footer class="page-footer">
	    <div class="container">
	        <div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">EBG</h5>
					<p class="grey-text text-lighten-4">Energetic Body Gym</p>
		        </div>
	        </div>
	        </div>
		<div class="footer-copyright" style="background-color: #00796b;">
	        <div class="container">
				<a href="http://www.sena.edu.co/" target="_blank" class="grey-text text-lighten-4 left">
			        <h6>&nbsp;&nbsp;© ADSI 1446435</h6>
			    </a>
		        <a href="http://www.sena.edu.co/" target="_blank" class="grey-text text-lighten-4 right">
			       	<img src="../img/Logo.png" width="40px" height="40px">
			    </a>
			    <a href="http://oferta.senasofiaplus.edu.co/" target="_blank" class="grey-text text-lighten-4 right">
			    	<img src="../img/developers-V2.png" width="55px" height="46px">
			    </a>
	        </div>
	    </div>
	</footer>
</html>
<script type="text/javascript" src="../js/Librerias/jquery-3.3.1.min.js"></script>	
<script type="text/javascript" src="../js/Librerias/materialize.min.js"></script>
<script type="text/javascript" src="../js/menu/funciones.js"></script>