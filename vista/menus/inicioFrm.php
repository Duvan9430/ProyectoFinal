<?php session_start(); ?>
<div>
	<style type="text/css">
		.tar{
			float: left;
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
					<!--<h3 class="orange-text text-lighten-2">Energetic Body Gym</h3>-->
				</div>
			</li>
		</ul>
	</div>
	&nbsp;
	<div class="row" style="margin-left: 6%;">
		<div class="tajetica1 tar">
			<img src="../img/verde.PNG" alt="" class="responsive-img">
		</div>
		<div class="tajetica2 tar" style="margin-right: 0.8%">
			<img src="../img/naran.PNG" alt="" class="responsive-img">
		</div>
		<div class="tajetica3 tar">
			<img src="../img/ver.PNG" alt="" class="responsive-img">
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
