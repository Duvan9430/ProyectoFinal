<!DOCTYPE html>
<html>
<head>
	<title>Creación de Equipos</title>
	<link rel="stylesheet" type="text/css" href="../css/Eventos/icon.css">
	<link rel="stylesheet" type="text/css" href="../css/Librerias/materialize.css">
	<link rel="stylesheet" type="text/css" href="../css/Eventos/estilos.css">
</head>
<body>
	<div class="container valign center" id="contenido">
		<div class="row">
			<div class="col s12">
				<ul class="tabs">
					<li class="tab col s6"><a href="#crearequipo">Crear Equipo</a></li>
					<li class="tab col s6"><a href="#tblequipo">Consultas</a></li>
				</ul>
			</div>
			&nbsp
			<table id="tblequipo" class="striped">
					<thead>
						<tr>
							<th>Torneo</th>
							<th>Nombres del equipo</th>
						</tr>
					</thead>
					<tbody id="bodyEquipo"></tbody>

			</table>
			<div id="crearequipo">
				<form id="equipoFrm">
					<h4>Crear Equipo</h4>
					&nbsp
					<div class="col s12">
						<div class="input-field col s3"></div>
						<div class="input-field col s1">
							<i class="material-icons prefix">people</i>
						</div>
						<div class="input-field col s5">
			      			<select id="sltTorneo" name="sltTorneo" class="browser-default">
						    </select>
			      		</div>
			      		<div class="input-field col s3"></div>
			      	</div>
					<div class="col s12">
						<div class="input-field col s3"></div>
						<div class="input-field col s1">
							<i class="material-icons prefix">people</i>
						</div>
						<div class="input-field col s5">
			      			<input type="text" name="txtNombreEquipo" id="txtNombreEquipo">
			      			<label for="txtNombreEquipo" class='active'>Nombre:</label>
			      		</div>
			      		<div class="input-field col s3"></div>
			      	</div>

			      <div class="valing-center">
			      	<a class="waves-effect waves-light btn" name="btnCrear" id="btnCrear" value="Crear" style="background-color: #fc7323; color: black; font-weight: bold;" ><i class="material-icons right icon-black">send</i>Crear</a>
			      </div>
				</form>
	    	</div>
	 </div>
</div>	
<div class="modal" id="modalEliminar" name="modalEliminar">
	  	<div class="modal-dialog" role="document">
		<div class="modal-content">
  			<div class="modal-header">
    			<h5 class="modal-title">Equipo</h5>
  			</div>
			<div class="modal-body">	
				<p>Esta seguro de Eliminar este Torneo.</p>
  			</div>
  			<div class="modal-footer">
    			<button type="button" class="btn btn-secondary modal-close" data-dismiss="modal">Cancelar</button>
    			<button type="button" class="btn btn-primary modal-close" data-dismiss="modal" id="btnEliminar">Eliminar</button>
  			</div>
		</div>
		</div>
</div>
<div class="modal" id="modalModificar" name="modalModificar">
	<div class="modalGrande-content">
		<form id="frmModificarEquipo">	
				<div class="row">
				<h4>Modificar</h4>
				&nbsp
					<div class="col s12">
						<div class="input-field col s3"></div>
						<div class="input-field s1">
						 	<i class="material-icons prefix">wb_auto</i>
							</div>
							<div class="input-field col s5">
			      				<input type="text" name="txtIdEsquipo" id="txtIdEsquipo" hidden>
						    </div>
						    <div class="input-field col s3"></div>
			      	</div>
					<div class="col s12">
						<div class="input-field col s3"></div>
						<div class="input-field col s1">
							<i class="material-icons prefix">people</i>
						</div>
						<div class="input-field col s5">
			      			<select id="slttorneo" name="slttorneo" class="browser-default"">
						    </select>
			      		</div>
			      		<div class="input-field col s3"></div>
			      	</div>
					<div class="col s12">
						<div class="input-field col s3"></div>
						<div class="input-field col s1">
							<i class="material-icons prefix">people</i>
						</div>
						<div class="input-field col s5">
			      			<input type="text" name="txtNombreequipo" id="txtNombreequipo">
			      		</div>
			      		<div class="input-field col s3"></div>
			      	</div>
				</div>
				<center>
					<div class="valing-center">
						<a class="modalGrande-close waves-effect waves-green btn-flat " name="btnModificar" id="btnModificar" value="Crear" style="background-color: #fc7323; color: black; font-weight: bold;" ><i class="material-icons right icon-black">send</i>Guardar</a>
					</div> 
				</center>
				</form>			
          	</div>
			</div>
</div>
		
	
    </div>
	<script type="text/javascript" src="../js/Librerias/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/Librerias/materialize.min.js"></script>
	<script type="text/javascript">
		$(function() {
			M.AutoInit();
		});
	</script>
	<script type="text/javascript" src="../js/Eventos/equipo.js"></script>
</body>
</html>
