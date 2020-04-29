<?php
	session_start();
	if ($_SESSION['rolLogueado']==1 || $_SESSION['rolLogueado'] == 3) {
		print '
		 	<div class="row">
	    		<div class="col s6">
	      			<div class="card">
	        			<div class="card-image">
	          				<a title="Maquinas" id="imgCrearMaquina" name="imgCrearMaquina"><center><img src="../img/maquinas.jpg" style="width: 70%; height: 50%"/></center></a>
	        			</div>
	        			<div class="card-action">
	          				<center><a class="btn botonMenu" id="btnMaquinaF" name="btnMaquinaF">Maquinas</a></center>
	        			</div>
	     			</div>
	    		</div>
	    		<div class="col s6">
	      			<div class="card">
	        			<div class="card-image">
	          				<a title="Gimnasio"><center><img src="../img/gimnasio.jpg" style="width: 70%; height: 50%"/></center></a>
	        			</div>
	        			<div class="card-action">
	          				<center><a class="btn botonMenu" id="btnGimnasioF" name="btnGimnasioF">Gimnasios</a></center>
	        			</div>
	      			</div>
	    		</div>
			</div>
		';
	}


?>