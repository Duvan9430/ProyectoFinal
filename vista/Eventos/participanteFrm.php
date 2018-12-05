<!DOCTYPE html>
<html>
<head>
	<title>Creación Participante</title>
	<link rel="stylesheet" type="text/css" href="../css/Eventos/icon.css">
	<link rel="stylesheet" type="text/css" href="../css/Librerias/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../css/Eventos/estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/Librerias/jquery-ui.css">
</head>
<body>
	<input type="text" name="txtApredices" id="txtApredices" hidden>
		<div class="container valign center" id="contenido">
		&nbsp
			<form id="partcipanteFrm" >			
				<div class="row">
					<h4>Insertar participante(s)</h4>
					&nbsp
					<div class="col s12">
						<div class="input-field col s3"></div>
						<div class="input-field col s1">
							<i class="material-icons prefix">people</i>
						</div>
						<div class="input-field col s4">
			      			<select id="sltEquipo" name="sltEquipo" class="browser-default">
						    </select>
			      		</div>		
			      	</div>
					<div class="col s12">
						<div class="input-field col s3"></div>
						<div class="input-field col s1">
							<i class="material-icons prefix">person_add</i>
						</div>
						<div class="input-field col s4">
      						<input type="text" id="txtParticipante" name="txtParticipante" onchange ="this.value=''">
      					</div> 		      		
			      	</div> 
				</div>
				&nbsp 
				<table id="tblPartcipante" class="striped">
					<thead>
						<tr>
							<th>Indice</th>
							<th>Tipo Identificación</th>
							<th>N° Identificación</th>
							<th>Nombres</th>
							<th>Ficha</th>		
						</tr>
					</thead>
					<tbody id="bodyparticipante"></tbody>
					<tbody id="participante"></tbody>
				</table>
				<div class="valing-center">
					<a class="waves-effect waves-light btn" name="btnCrear" id="btnCrear" value="Crear" style="background-color: #fc7323; color: black; font-weight: bold;" ><i class="material-icons right icon-black">send</i>Crear</a>
				</div>
				<br>	
			</form>			
			<div class="participantes"></div> 
		</div>
	<!-- INICIO MODAL DE ELIMINAR-->
	<div class="modal" tabindex="-1" role="dialog" id="modalEliminar">
  	  	<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<h5 class="modal-title">Participantes</h5>
      			</div>
    			<div class="modal-body">	
    				<p>Esta seguro de Eliminar este Participante.</p>
      			</div>
      			<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        			<button type="button" class="btn btn-primary" data-dismiss="modal" id="btnEliminar">Eliminar</button>
      			</div>
    		</div>
  		</div>
	</div>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<script src="../js/Librerias/jquery-3.3.1.min.js"></script>
	<script src="../js/Librerias/jquery-ui.min.js"></script>
	<script src="../js/Eventos/participanteAutocompletar.js"></script>
	<script type="text/javascript" src="../js/Eventos/Participante.js"></script>
</body>
</html>