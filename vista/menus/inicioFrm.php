<?php session_start(); ?>
<div class="container">
    <div class="card-body col s12">
    	<div id="texto">
			<h4 style="color: #238276"><b>Bienvenido  <?php echo $_SESSION['nombreUnoLogueado'];?> <?php echo $_SESSION['nombreDosLogueado']; ?>  <?php echo $_SESSION['apellidoUnoLogueado']; ?></b></h4>
			<br>
	
			<h5 style="color: #fc7323" ><b>Buena alimentación + Actividad física</b></h5>
			<br>
			<p>
				<b>Para tener una adecuada alimentación es importante alcanzar un equilibro calórico,</b>
			</p>
			<p>
				<b>es decir, lograr el mejor balance entre las calorías que se consumen y las calorías</b>
			</p>
			<p>
				<b>que se gastan en las funciones diarias del organismo, la actividad diaria y el ejercicio.</b>
			</p>	 
			<br>
			<br>
			<div>
				<img id="imagenPrinc" name="imagenPrinc" src="../img/aprendiz1.jpg" alt="">
			</div>
		</div>
	</div>
</div>
