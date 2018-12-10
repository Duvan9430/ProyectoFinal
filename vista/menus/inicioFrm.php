<?php session_start(); ?>

	<div class="container">
			    <div class="card-body col s12">
			    	<div id="texto">
					<div class="barra valing center">
						<h4><b>Bienvenido  <?php echo $_SESSION['nombreUnoLogueado'];?> <?php echo $_SESSION['nombreDosLogueado']; ?>  <?php echo $_SESSION['apellidoUnoLogueado']; ?></b></font></h4> 
						<hr>                    
					</div>	
						
						<br>
						<div class="row"> 
								
							<img class="activator" src="../img/inicio.jpg">	
			            </div> 
					</div>
				</div>
	</div>
</div>
