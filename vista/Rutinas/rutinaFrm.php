	<link rel="stylesheet" type="text/css" href="../css/Librerias/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../css/Librerias/bitnami.css">
	<div class="rutina">
		<div class="row">
			&nbsp;
			<h4 align="center"><b>Rutinas</b></h4>
			<div class="col s12">
					<div class="col s8">
					</div>
					<div class="col s3">
						<button class="waves-effect waves-light btn right modal-trigger" data-target="modalRutina"><i class="material-icons rigth" id="agregarR"></i>Agregar</button>
					</div>
				<div class="divider"></div>
				<br/>
				<br/>
				<div class="row">
					<div class="container">
						<div class="col s12">
							<table class="responsive-table highlight">
								<thead>
									<tr>
										<th>Clasificación</th>
										<th>Nombre</th>
										<th>Opciones</th>									
									</tr>
								</thead>
								<tbody id="contenidoRutina">
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal" id="modalUpdateRutina">
		<div class="modal-content">
			<div class="row">
				<div class="col s12" align="center">
					<h4 class="header">Modificar rutina</h4>
				</div>
			</div>
			<form id="frmUpdateRutina">
				<div class="container">
					<div class="row">
						<div class="col s12">
							<div class="row">
								<div class="input-field col s12">
									<input type="text" name="idRutina" id="idRutina" readonly hidden>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">	
									<select class="browser-default" id="idClasificacionRutinaUpdate" name="idClasificacionRutinaUpdate">
										<option value="0" selected disabled>Seleccione</option>
									</select>									
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<i class="material-icons prefix">create</i>
									<label for="rutNombreUpdate">Nombre</label>
									<input type="text" name="rutNombreUpdate" id="rutNombreUpdate" class="validate" placeholder="">
								</div>
							</div>	
						</div>						
					</div>
					<div class="row">
						<div class="col s12" align="center">
							<a href="#!" class="waves-effect waves-light btn modal-close" id="actualizarRutina">Guardar</a>
							<a href="#!" class="waves-effect waves-light btn orange lighten-1 modal-close">Cancelar</a>
						</div>
					</div>
				</div>				
			</form>
		</div>
	</div>
	<div class="modal" id="modalRutina">
		<div class="modal-content">
			<div class="row">
				<div class="col s12" align="center">
					<h4 class="header">Agregar rutina</h4>
				</div>
			</div>
			<form id="frmCreateRutina">
				<div class="container">
					<div class="row">
						<div class="col s12">
							<div class="row">
								<div class="col s12">
									<label>Clasificación Rutina</label>									
									<select class="browser-default" id="idClasificacionRutina" name="idClasificacionRutina">
										<option value="0" disabled selected>Elije una opción</option>
									</select>									
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<label>Nombre</label>
									<input type="text" name="rutNombre" id="rutNombre" class="validate">
								</div>
							</div>	
						</div>						
					</div>
					<div class="row">
						<div class="col s12" align="center">
							<a href="#!" class="waves-effect waves-light btn modal-close" id="guardarRutina">Guardar</a>
							<a href="#!" class="waves-effect waves-light btn orange lighten-1 modal-close">Cancelar</a>
						</div>
					</div>
				</div>				
			</form>
		</div>
	</div>
	<div class="modal" id="modalDeleteRutina">
		<div class="modal-content">
			<div class="row">
				<div class="col s12" align="center">
					<h4 class="header">Eliminar rutina</h4>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<blockquote>
						¿Desea eliminar la rutina seleccionada?
					</blockquote>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<input type="text" name="idRutinaM" id="idRutinaM" readonly hidden>
				</div>
			</div>
			<div class="row">
				<div class="col s12" align="right">
					<button type="button" class="waves-effect waves-ligh btn modal-close" id="deleteRutinaM">Eliminar</button>
					<button type="button" class="waves-effect waves-ligh btn orange lighten-1 modal-close">Cancelar</button>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="../js/Librerias/jquery.min.js"></script>
	<script type="text/javascript" src="../js/Librerias/materialize.min.js"></script>
	<script type="text/javascript" src="../js/Rutinas/Rutina.js"></script>
