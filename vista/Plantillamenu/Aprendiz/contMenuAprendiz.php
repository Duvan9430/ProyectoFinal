<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Energetic Body Gym</title>	
	<link rel="stylesheet" type="text/css" href="../../../Css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../../../Css/NavbarSidebar2.css">
	<link rel="stylesheet" type="text/css" href="../../../Css/icon.css">
</head>
<body>
	<!--Header-->
	<header class="orange darken-4">			
	</header>
	<!--Boton menuSlide-->
		<a href="#" class="sidenav-trigger btn-floating btn-large btnMenu" data-target="menu-side" ><i class=" material-icons">menu</i></a>
		<!--<h5 class="center">Aprendices</h5>-->
	<nav>
	<div class="categories-wrapper z-depth-4">
		    <div class="categories-container">		 
		        <ul class="categories container">
        			<a class="brand-logo">Energetic Body Gym</a>
		        	<img src="../../../Img/Logo2.png" class="logo left">	
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
				<img src="../../Img/pictUsu.png" alt="" class="circle">
			</a>
			<a href="">
				<span class="name white-text">Luigui David Ramirez</span>
			</a>
			<a href="">
				<span class="email white-text">luigui@tucorreo.com</span>
			</a>
		</div>
	</li>

	<li><a class="waves-effect waves-teal" href="#"><i class="material-icons">home</i>Home</a></li>
	<li><div class="divider"></div></li>
	<li><a class="waves-effect waves-teal" href="../aprendiz/pagAprendizFrm.php"><i class="material-icons">Ejemplo</i>Instructor</a></li>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<li><a class="waves-effect waves-red top" href="#"><i class="material-icons">power_settings_new</i>Cerrar Sesión</a></li>
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
</body>
</html>
<script type="text/javascript" src="../../../Js/jquery-3.3.1.min.js"></script>	
	<script type="text/javascript" src="../../../Js/materialize.min.js"></script>
<script>
	$(document).ready(function(){
    	$('.sidenav').sidenav({
    		edge:'left',
    		inDuration: 150,
    		outDuration: 150
    	});
    	$('.collapsible').collapsible();
  	});
</script>