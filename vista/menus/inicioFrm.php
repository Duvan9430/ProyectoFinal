<?php session_start(); ?>
<div>
	<style type="text/css">
		.l{
			/*width: 100vw !important;*/
			height: auto !important;
			border-bottom: 0px;
		}
		.tar{
			width: 32.9vw;
			float: left;
			padding: 20px;
			background-color: red;
		}
	</style>
	<div class="container">
	    <div class="card-body col s12">
	    	<div id="texto">
			<div class="barra valing center">
				<h4><b>Bienvenido  <?php echo $_SESSION['nombreUnoLogueado'];?> <?php echo $_SESSION['nombreDosLogueado']; ?>  <?php echo $_SESSION['apellidoUnoLogueado']; ?></b></font></h4> 
				<hr>                    
			</div>	
				
				<br>
			</div>
		</div>
	</div>
	<div class="slider">
		<ul class="slides">
			<li>
				<img class="activator" src="../img/gym.jpg">
				<div class="caption left-align">
					<h3 class="orange-text text-lighten-2">Energetic Body Gym</h3>
				</div>
			</li>
		</ul>
	</div>
	<div class="row l">
		<div class="tajetica1 tar" style="background-color: #ffffff">
			<img src="../img/BEBESOTE.jpg" alt="" class="responsive-img">
			
		</div>
		<div class="tajetica2 tar" style="background-color:#ffb74d ">
			<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
		</div>
		<div class="tajetica3 tar" style="background-color:#4db6ac ">
			<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('.slider').slider({
			indicators: false,
			width: 600
	});
	jQuery(document).ready(function() {

	});
</script>
