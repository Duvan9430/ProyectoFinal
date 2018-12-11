	<link rel="stylesheet" type="text/css" href="../../css/Librerias/bitnami.css">
	<link rel="stylesheet" type="text/css" href="../../css/Librerias/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/Rutinas/frmCrearRutina.css">

	<div class="container " id="contenido">
		&nbsp
		<div class="card">
			<div class="card-body">
				<center><span class="header" style="font-family: verdana; font-size:270%; ">Crear Rutina  </span></center>
				
				<form id="frmCrearRutinas">
					<div class="row ">
						<div class="row">
							<div class="col s3"></div>
							<div class="col s5 m6 estilo" id="selectClasificacion"></div>
							<div class="col s3"></div>
						</div>
						
						<div class="row">
							<div class="col s3"></div>	
							<div class="input-field col s6">
							 	<input id="nombreRutina" name="nombreRutina" type="text" class="validate">
							 	<label for="nombreRutina" style="font-family: verdana;">Nombre de Rutina</label>
							</div>
							<div class="col s3"></div>
						</div>

						
						<div class="row">
							<div class="col s3"></div>
							<div class="col s6">
								<label>Ejercicios:</label>
							    <select class="browser-default" multiple id="selectEjercicios">
							      
							    </select>
							</div>
							<div class="col s3"></div>
						</div>

						<div class="row valign center">
	                 		<a class="waves-effect waves-light btn" id="btnCrearRutina">Crear</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script type="text/javascript" src="../../js/Librerias/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../../js/Rutinas/frmCrearRutina.js"></script>

