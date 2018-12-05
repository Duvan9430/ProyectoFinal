<!DOCTYPE html>
<html>
<head>
	<title>Creación de Torneos</title>
	<link rel="stylesheet" type="text/css" href="../css/Eventos/icon.css">
	<link rel="stylesheet" type="text/css" href="../css/Eventos/estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/Librerias/materialize.css">
</head>
<body>

<div class="container" id="contenido">
	&nbsp
    <div class="row">
    	<div class="col s12">
      		<ul class="tabs">
        		<li class="tab col s6"><a href="#crearTorneo">Crear Torneo</a></li>
        		<li class="tab col s6"><a href="#tblTorneos">Consultas</a></li>
      		</ul>
    	</div>
    		&nbsp
	        <table id="tblTorneos" class="striped">
				<thead>
			       <tr>
			           <th>Nombre</th>
			           <th>Fecha Inicio</th>
				       <th>Fecha Fin</th>
				       <th>N° Equipos</th>
				       <th>Disciplina</th>
				       <th>Tipo Eliminatoria</th>
				       <th>Opciones</th>
				    </tr>
				</thead>
				<tbody id="bodyTorneo"></tbody>
			</table>	
			<div id="crearTorneo" class="col s12">
				<form id="frmCrearTorneo">
					<div class="row">
						<h4 class="center-align">Crear Torneo</h4>
							&nbsp
							<div class="col s12">
								<div class="input-field col s4">
						 			<i class="material-icons prefix">wb_auto</i>
							  			<input type="text" name="txtNombreTorneo" id="txtNombreTorneo">
							   			<label for="lblNombreTorneo" class='active'>Nombre:</label>
					     		</div>
					     		<div class="input-field col s4">
					     			<div class="input-field col s1">
									<i class="material-icons prefix">vpn_lock</i>
									</div>
									<div class="input-field col s11">						
										<select name="sltClasificacionTorneo" id="sltClasificacionTorneo" class="browser-default">    
									    </select>
									</div>
					     		</div>
					     		<div class="input-field col s4">
					     			<div class="input-field col s1">
								     	<i class="material-icons prefix">wc</i>
								    </div>
								    <div class="input-field col s11">						
								      	<select name="sltGeneroTorneo" id="sltGeneroTorneo" class="browser-default">			     
										</select>
									</div>
					     		</div>	
							</div>
							<div class="col s12">
								<div class="input-field col s4">	
									<div class="input-field col s1">
									     <i class="material-icons prefix">directions_run</i>
									</div>
									<div class="input-field col s11">						
										<select name="sltDisciplina" id="sltDisciplina" class="browser-default">		      
										</select>
									</div>
								</div>
								<div class="input-field col s4">	
									<div class="input-field col s1">
										<i class="material-icons prefix">place</i>
									</div>
									<div class="input-field col s11">
									    <select name="sltLugar" id="sltLugar" class="browser-default">		 
										</select>
										<center>
										<div class="valing-center">
								 			<a data-target="modalCrearLugar" class="btn modal-trigger" class="waves-effect waves-light btn" name="btnCrearLugar"  value="Crear" style="background-color: #fc7323; color: black; font-weight: bold;" ><i class="material-icons right icon-black">add_location</i>Crear Lugar</a>
								    	</div>
								    	</center>
									</div>
								</div>
								<div class="input-field col s4">
									<div class="input-field col s1">
										<i class="material-icons prefix">directions_run</i>
									</div>
									<div class="input-field col s11">
									    <select name="sltTipoEliminatoria" id="sltTipoEliminatoria" class="browser-default">
									 	</select>
									</div>
								</div>
							</div>
							<div class="col s12">
								
								<div class="input-field col s4">
								    <i class="material-icons prefix">date_range</i>
								      	<input type="date" name="txtFechaInicio" id="txtFechaInicio"><br>
								      	<i>Fecha Inicio</i>
								</div>
								<div class="input-field col s4">
								    <i class="material-icons prefix">date_range</i>
								    <input type="date" name="txtFechaFin" id="txtFechaFin" ><br>
								    <i>Fecha Fin</i>
								</div>
								<div class="input-field col s4">
									<i class="material-icons prefix">wb_auto</i>
									<input type="text" name="txtNumeroEquipos" id="txtNumeroEquipos" >
									<label for="lblNumeroEquipos" class='active'>Nº Equipos:</label>
								</div>	
							</div>    	
					</div>  
					<center>
					<div class="valing-center">
						<a class="waves-effect waves-light btn" name="btnCrearTorneo" id="btnCrearTorneo" value="Crear" style="background-color: #fc7323; color: black; font-weight: bold;" ><i class="material-icons right icon-black">send</i>Crear</a>
					</div> 
					</center>
				</form>       
			</div>
		</div>
</div>
	  <!-- MODAL CREAR LUGAR -->
<div id="modalCrearLugar" class="modal">
   <div class="modal-content">
	    <form id="frmCrearLugar">		
			<div class="row">
			<center>
			<h4>Crear Lugar</h4>
			&nbsp
			</center>
			<div class="col s12">
				<div class="input-field col s2"></div>
					<div class="input-field col s8">
			 			<i class="material-icons prefix">wb_auto</i>
			  			<input type="text" name="txtNombreLugar" id="txtNombreLugar">
				      	<label for="lblNombreLugar" class='active'>Nombre:</label>
				    </div>
			    <div class="input-field col s2"></div>
		    	</div>
			<div class="col s12">
				<div class="input-field col s2"></div>				      	  
				<div class="input-field col s8">
						<i class="material-icons prefix">location_on</i>
						<input type="text" name="txtDireccionLugar" id="txtDireccionLugar">
					   	<label for="lblDireccionLugar" class='active'>Dirección:</label>
				</div>
				<div class="input-field col s2"></div>
			</div>
			<div class="col s12">
				<div class="input-field col s2"></div>
					<div class="input-field col s1">
						<i class="material-icons prefix">domain</i>
					</div>				      		
				<div class="input-field col s7">
					<select name="sltDepartamento" id="sltDepartamento" class="browser-default">
					</select>			      		
				</div>
				<div class="input-field col s2"></div>
			</div>	
			<input type="text" name="departamentoId" id="departamentoId" hidden>
			<div class="col s12">
				<div class="input-field col s2"></div>
					<div class="input-field col s1">
						<i class="material-icons prefix">domain</i>
					</div>				      		
				<div class="input-field col s7">
					<select name="sltMunicipio" id="sltMunicipio" class="browser-default">
					</select>			      		
				</div>
				<div class="input-field col s2"></div>
			</div>		      		
		</div>
			<center>
			<div class="valing-center">				  
		     	<a class="waves-effect waves-light btn" name="btnCrearLugar" id="btnCrearLugar" value="Crear" style="background-color: #fc7323; color: black; font-weight: bold;" ><i class="material-icons right icon-black">send</i>Crear</a>
			</div>
			</center>
		</form>
	</div>	
</div>  		
<section class="container">
    <div class="row">
      <article class="col s6 offset-s3">
        <div id="modal1" class="modalGrande">
          <div class="modalGrande-content">
            <form id="frmModificarTorneo">		
				<div class="row">
					<h4>Modificar</h4>
					&nbsp
					<div class="col s12">
					<div class="input-field col s4">
					 	<i class="material-icons prefix">wb_auto</i>
							<input type="text" name="txtIdTorneoModal" id="txtIdTorneoModal">
			 		</div>
					<div class="input-field col s4">
						<i class="material-icons prefix">wb_auto</i>
			  			<input type="text" name="txtNombreTorneoModal" id="txtNombreTorneoModal">
				   	</div>
		    		<div class="input-field col s4">
		     			<div class="input-field col s1">
							<i class="material-icons prefix">vpn_lock</i>
						</div>
						<div class="input-field col s11">			
							<select name="sltClasificacionTorneoModal" id="sltClasificacionTorneoModal" class="browser-default">    
						    </select>
						</div>
					</div>	
				</div>
				<div class="col s12">
					<div class="input-field col s4">
			   			<div class="input-field col s1">
					     	<i class="material-icons prefix">wc</i>
					    </div>
					    <div class="input-field col s11">				
							<select name="sltGeneroTorneoModal" id="sltGeneroTorneoModal" class="browser-default">    
							</select>
						</div>
					</div>
					<div class="input-field
					 col s4">	
						<div class="input-field col s1">
						    <i class="material-icons prefix">directions_run</i>
						</div>
					<div class="input-field col s11">			
						<select name="sltDisciplinaModal" id="sltDisciplinaModal" class="browser-default">		      
						</select>
					</div>
				</div>
				<div class="input-field col s4">	
					<div class="input-field col s1">
						<i class="material-icons prefix">place</i>
					</div>
					<div class="input-field col s11">
					    <select name="sltLugarModal" id="sltLugarModal" class="browser-default">		 
						</select>
					</div>
				</div>
			</div>
			<div class="col s12">
				<div class="input-field col s4">
					<div class="input-field col s1">
						<i class="material-icons prefix">directions_run</i>
					</div>
					<div class="input-field col s11">
					    <select name="sltTipoEliminatoriaModal" id="sltTipoEliminatoriaModal" class="browser-default">
					 	</select>
					</div>
				</div>
				<div class="input-field col s4">
				    <i class="material-icons prefix">date_range</i>
				      	<input type="date" name="txtFechaInicioModal" id="txtFechaInicioModal"><br>
					   	<i>Fecha Inicio</i>
					</div>
					<div class="input-field col s4">
					    <i class="material-icons prefix">date_range</i>
							<input type="date" name="txtFechaFinModal" id="txtFechaFinModal" ><br>
						    <i>Fecha Fin</i>
					</div>
					<div class="input-field col s4">
						<i class="material-icons prefix">wb_auto</i>
							<input type="text" name="txtNumeroEquiposModal" id="txtNumeroEquiposModal" >
						</div>	
					</div>    	
				</div>
				<center>
				<div class="valing-center">
					<a class="modalGrande-close waves-effect waves-green btn-flat name=" btnModificar" id="btnModificar" value="Crear" style="background-color: #fc7323; color: black; font-weight: bold;" ><i class="material-icons right icon-black">send</i>Guardar</a>
				</div> 
				</center>				
			</form>
          </div>
        </div>         
      </article>
  </section>
<!-- INICIO MODAL DE ELIMINAR-->
	<div class="modal" tabindex="-1" role="dialog" id="modalEliminar">
  	  	<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<h5 class="modal-title">Torneos</h5>
      			</div>
    			<div class="modal-body">	
    				<p>Esta seguro de Eliminar este Torneo.</p>
      			</div>
      			<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        			<button type="button" class="btn btn-primary" data-dismiss="modal" id="btnEliminar">Eliminar</button>
      			</div>
    		</div>
  		</div>
	</div>
	<script type="text/javascript" src="../js/Librerias/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/Librerias/materialize.min.js"></script>
	<script type="text/javascript" src="../js/Eventos/torneo.js"></script>
 	<script type="text/javascript" src="../js/Librerias/materialize - copia.js"></script>
</body>
</html>
