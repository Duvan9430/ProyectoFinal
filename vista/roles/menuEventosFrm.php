<?php
	session_start();
	if($_SESSION['rolLogueado'] == 1 || $_SESSION['rolLogueado'] == 2){
		print '
			<div class="row">
		    	<div class="col s6">
		      		<div class="card">
		        		<div class="card-image">
		          			<img src="../img/Eventos/torneo.jpg" style="width: 80%; height: 80%">
		        		</div>
		        		<div class="card-action">
		          			<center><a class="btn botonMenu" id="btnTorneoF" name="btnTorneoF">Crear Torneo</a></center>
		        		</div>
		      		</div>
		    	</div>
		    	<div class="col s6">
		      		<div class="card">
		        		<div class="card-image">
		          			<img src="../img/Eventos/Equipos.png" style="width: 70%; height: 50%">
		        		</div>
		        		<div class="card-action">
		          			<center><a class="btn botonMenu" id="btnEquipoF" name="btnEquipoF">crear Equipos</a></center>
		        		</div>
		      		</div>
		    	</div>
		    	<div class="col s6">
		      		<div class="card">
		        		<div class="card-image">
		          			<img src="../img/Eventos/torneo (1).jpg" style="width: 70%; height: 50%">
		        		</div>
		        		<div class="card-action">
		          			<center><a class="btn botonMenu" id="btnEliminatoriasF" name="btnEliminatoriasF">Eliminatorias</a></center>
		        		</div>
		      		</div>
		    	</div>
		    	<div class="col s6">
		      		<div class="card">
		        		<div class="card-image">
		          			<img src="../img/Eventos/Participante.png" style="width: 70%; height: 70%">
		        		</div>
		        		<div class="card-action">
		          			<center><a class="btn botonMenu" id="btnParticipantesF" name="btnParticipantesF">Registrar Participantes</a></center>
		        		</div>
		      		</div>
		    	</div>
		  	</div>
		';
	}else if($_SESSION['rolLogueado'] == '4'){
		print '
			<div class="row">
				<div class="col s6">
		      		<div class="card">
		        		<div class="card-image">
		          			<img src="../img/Eventos/Equipos.png" style="width: 70%; height: 50%">
		        		</div>
		        		<div class="card-action">
		          			<center><a class="btn botonMenu" id="btnEquipoF" name="btnEquipoF">crear Equipos</a></center>
		        		</div>
		      		</div>
		    	</div>
		    	<div class="col s6">
		      		<div class="card">
		        		<div class="card-image">
		          			<img src="../img/Eventos/Participante.png" style="width: 70%; height: 70%">
		        		</div>
		        		<div class="card-action">
		          			<center><a class="btn botonMenu" id="btnParticipantesF" name="btnParticipantesF">Registrar Participantes</a></center>
		        		</div>
		      		</div>
		    	</div>
			</div>
		';
	}


?>