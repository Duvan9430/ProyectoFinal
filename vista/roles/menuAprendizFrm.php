<?php
	session_start();
	if($_SESSION['rolLogueado'] == 1 || $_SESSION['rolLogueado'] == 3){
		print '
			<div class="row">
				<div class="col s6">
			        <div class="card">
			          	<div class="card-image">
			            	<a title="Crear EPS"><center><img src="../img/eps.jpg" style="width: 70%; height: 50%"/></center></a>
			          	</div>
			          	<div class="card-action">
			            	<center><a class="btn botonMenu" id="btnCrearEps" name="btnCrearEps">Crear Eps</a></center>
			          	</div>
			        </div>
			    </div>
			    <div class="col s6">
			        <div class="card">
			          	<div class="card-image">
			            	<a title="Crear Ficha"><center><img src="../img/ficha.jpg" style="width: 70%; height: 50%"/></center></a>
			          	</div>
			          	<div class="card-action">
			            	<center><a class="btn botonMenu" id="btnCrearFicha" name="btnCrearFicha">Crear Ficha</a></center>
			          	</div>
			        </div>
			    </div>
			    </div>
			<div class="row">
			    <div class="col s6">
			        <div class="card">
			          	<div class="card-image">
			            	<a title="Crear Documento"><center><img src="../img/identificacion.jpg" style="width: 70%; height: 50%"/></center></a>
			          	</div>
			          	<div class="card-action">
			            	<center><a class="btn botonMenu" id="btnCrearDocumento" name="btnCrearDocumento">Crear Tipo Documento</a></center>
			          	</div>
			        </div>
			 	</div>
			    <div class="col s6">
			        <div class="card">
			          	<div class="card-image">
			            	<a title="Crear persona"><center><img src="../img/persona.png" style="width: 70%; height: 50%"/></center></a>
			          	</div>
			          	<div class="card-action">
			            	<center><a class="btn botonMenu" id="btnCrearPersona" name="btnCrearPersona">Crear Persona</a></center>
			          	</div>
			        </div>
			    </div>
			</div>
		';
	}
?>