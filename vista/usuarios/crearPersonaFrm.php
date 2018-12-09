
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="../css/Librerias/jquery.ambiance.css">
	 <link rel="stylesheet" type="text/css" href="../css/Librerias/bitnami.css">
	 <!-- Libreria Materialize -->
     <link rel="stylesheet" type="text/css" href="../css/Librerias/materialize.css">
	<link rel="stylesheet" type="text/css" href="../css/Librerias/dataTables.material.min.css">
	<link rel="stylesheet" type="text/css" href="../css/Librerias/materialize.min.normalmodal.css">
	<link rel="stylesheet" type="text/css" href="../css/Librerias/material.min.css">


	<!-- Banner -->

	<section class="container">
		&nbsp;
		<div class="row">
				<ul class="tabs">
					<li class="tab col s6"><a  class="active" href="#crearPersonaP">Registrar Persona</a></li>
					<li class="tab col s6"><a href="#TablaP">Consultas</a></li>
				</ul>
			<div id="crearPersonaP">
				<form id="crearPersonaFrm">
					<div class="card">
					<h3 class="header center">Registrar Persona</h3>
					<!--Txt Nombre-->
						<div class="row col-12">
						   	<div class="input-field col s4">	
						   	</div>
						   	<div class="input-field col s4 center">
						   		<img src="../img/yana.jpg" alt="" class="circle responsive-img" style="width:150px; height:150px;" id="imgSalida" name="imgSalida">
						   	</div>
	   					</div>
	   					<div class="row col s12 input-field">
	   						<div class="col s3"></div>
	   						<div class="file-field input-field col s6">
						    	<div class="btn">
						        	<span>File</span>
						        	<input type="file" id="txtPerFoto" name="txtPerFoto" multiple>
						      	</div>
						      	<div class="file-path-wrapper">
						        	<input class="file-path validate" type="text" placeholder="Seleccione su foto">
						      	</div>
					    	</div>
					    	<div class="col s3"></div>
	   					</div>
	   					<div class="row col-12">
		          			<div class="input-field col s4">
		            			<i class="material-icons prefix">account_circle</i>
		            			<input  type="text" class="validate" name="txtPerPrimerNombre" id="txtPerPrimerNombre">
		            			<label for="icon_people">Primer nombre</label>
		            		</div>
		            		<div class="input-field col s4">
		               			<i class="material-icons prefix">account_circle</i>
		               			<input type="text" class="validate" name="txtPerSegundoNombre" id="txtPerSegundoNombre">
		                		<label for="last_name">Segundo nombre</label>
		            		</div>
		        			<div class="input-field col s4">
		        				<i class="material-icons prefix">account_circle</i>
		        				<input type="text" class="validate"name="txtPerPrimerApellido" id="txtPerPrimerApellido">
		        				<label for="last_name">Primer apellido</label>
		        			</div>
		        		</div>
		        		<div class="row col-12">	
		        			<div class="input-field col s4">
		         				<i class="material-icons prefix">account_circle</i>
		          				<input type="text" class="validate" name="txtPerSegundoApellido" id="txtPerSegundoApellido">
		          				<label for="last_name">Segundo apellido</label>
		        			</div>
		        			<div class="input-field col s1">
		         				<i class="material-icons prefix">local_hospital</i>
		        			</div>
		        			<div class="input-field col s3">   
		          				<select name="txtIdTipoDocumento" id="txtIdTipoDocumento" class="browser-default"></select>
		        			</div>
		        			<div class="input-field col s4">
		         				<i class="material-icons prefix">folder_shared</i>
		          				<input type="text" class="validate" name="txtPerNit" id="txtPerNit" >
		          				<label>Número Identificación</label>
		        			</div>
		        		</div>
		        		<div class="col s12">	
		        			<div class="input-field col s4">
		          				<i class="material-icons prefix">date_range</i>
		          				<input type="date" class="validate" name="txtPerFechaNacimiento" id="txtPerFechaNacimiento">
		          				<label>Fecha Nacimiento</label>
		        			</div>
							<div class="input-field col s1">
								<i class="material-icons prefix">domain</i>
							</div>				      		
							<div class="input-field col s3">
								<select name="sltDepartamento" id="sltDepartamento" class="browser-default">
								</select>			      		
							</div>
							<div class="input-field col s1">
									<i class="material-icons prefix">domain</i>
								</div>				      		
							<div class="input-field col s3">
								<select name="txtIdMunicipioNacimiento" id="txtIdMunicipioNacimiento" class="browser-default">
								</select>			      		
							</div>
							<input type="text" name="departamentoId" id="departamentoId" hidden>
						</div>
						<div class="col s12">			      		
				        	<div class="input-field col s4">
				        		<i class="material-icons prefix">room</i>
				        		<input type="text" class="validate" name="txtPerDireccion" id="txtPerDireccion">
				        		<label for="last_name">Dirección</label>
				        	</div>
				        	<div class="input-field col s1">
				        		<i class="material-icons prefix">local_hospital</i>
				        	</div>
				        	<div class="input-field col s3">
				        		<select name="txtIdMunicipioResidencia" id="txtIdMunicipioResidencia" class="browser-default">
								</select>
				        	</div>
				        	<div class="input-field col s1">
				        		<i class="material-icons prefix">phone</i>
				        	</div>
				        	<div class="input-field col s3">
				        		<select name="txtIdGenero" id="txtIdGenero" class="browser-default">Genero</select>
				        	</div>
				        </div>
				        <div class="col s12">	
				        	<div class="input-field col s1">
				        		<i class="material-icons prefix">local_hospital</i>
				        	</div>
				        	<div class="input-field col s3">
				          		<select name="txtIdEps" id="txtIdEps" class="browser-default"></select>
				        	</div>
				        	<div class="input-field col s4">
				          		<i class="material-icons prefix">phone</i>
				          		<input type="number" data-length="10" name="txtPerTelefono" id="txtPerTelefono">
				          		<label>Teléfono</label>
				        	</div>
				        	<div class="input-field col s4">
				          		<i class="material-icons prefix">phone</i>
				          		<input type="number" data-length="10" name="txtPerCelular" id="txtPerCelular">
				          		<label>Celular</label>
				        	</div>
				        </div>	
			    		<div class="col s12">
			        		<div class="input-field col s1">
			          			<i class="material-icons prefix">whatshot</i>
			        		</div>
			        		<div class="input-field col s3">
			        			<select name="txtIdGrupoSanguineo" id="txtIdGrupoSanguineo" class="browser-default"> </select>
			        		</div>
			        		<div class="input-field col s1">
			          			<i class="material-icons prefix">whatshot</i>
			           		</div>
			        		<div class="input-field col s3">
			        			<select name="txtIdRegimen" id="txtIdRegimen" class="browser-default" ></select>
			        		</div>
			        		<div class="input-field col s4">
			         			<i class="material-icons prefix">email</i>
			          			<input  type="email" class="validate" name="txtPerCorreoElectronico" id="txtPerCorreoElectronico">
			          			<label>E-mail</label>
			        		</div>
			        	</div>
			        	<div class="col s12">	
			       			<div class="input-field col s1">
			         				<i class="material-icons prefix">local_hospital</i>
			          				</div>
			        		<div class="input-field col s3">
			          			<select name="txtIdSede" id="txtIdSede" class="browser-default">Sede</select>
			        		</div> 
							<div class="input-field col s1">
					     		<i class="material-icons prefix">local_hospital</i>
							</div>
							<div class="input-field col s3">
								<select name="txtIdAprendiz" id="txtIdAprendiz" class="browser-default">
					  				<option value="" disabled selected>Seleccione</option>
									<option value="2">Aprendiz</option>
									<option value="3">Bienestar</option>  
								</select>
							</div>
						</div>	 
						<div class="row">
							<div id="perfil">
							</div>
						</div>	
					</div>
	  				<a id="btnCrear" name="btnCrear" style="background-color:#fc7323;" class="modalGrande-close waves-effect waves-green btn-flat" type="button"><i class="material-icons right">send</i> Guardar</a>
				</form>
			</div>
			<article class="col s12 ">
	           	<!--modal Editar-->
			    <article class="col s6 offset-s3">
		            <div id="modalEditar" class="modalGrande">
			            <div class="modalGrande-content">
				            <h4>Modificar Persona</h4>
				            <?php
				            	include('formularioModificar.php');
				            ?>
			            </div>
				       	<div class="modalGrande-footer">
				        	<a id="btnModificar" name="btnModificar" style="background-color:#fc7323;" class="modalGrande-close waves-effect waves-green btn-flat" type="button"><i class="material-icons right">send</i> Guardar</a>
				        </div>
			    	</div>      
	    		</article> 
			    <!--fin modal Editar-->
				<!--modal Eliminar-->
				<article class="col s6 offset-s3">
			        <div id="modalEliminar" class="modal">
			        	<div class="modal-content">
			            	<h4>Seguro desea eliminar la Persona</h4>
			        	</div>
			          	<div class="modal-footer">
			          		<button id="btnEliminar" name="btnEliminar" style="background-color:#fc7323;"
			           class="modal-close waves-effect waves-green btn-flat" type="button">Eliminar</button> 
			          	</div>
			        </div>         
		      	</article>
		      	<div id="TablaP">
				    <div class="row">
					   	<div class="col-10">
			               	<table class="table table-striped table-border centered display responsive-table" id="tablaPersona" style="width: 100%">
			               		<thead>
			               			<tr">
				               			<th>Foto</th>	
							            <th>Primer Nombre</th>
						                <th>Segundo Nombre</th>
						                <th>Primer Apellido</th>
						                <th>Segundo Apellido</th>
						                <th>Tipo Documento</th>
						                <th>Número Identificación</th>
						                <th>Fecha Nacimiento</th>
						                <th>Municipio Nacimiento</th>
						                <th>Dirección</th>
						                <th>Municipio Residencia</th>
						                <th>Genero</th>
						                <th>EPS</th>
						                <th>Telefono</th>
						                <th>Celular</th>
						                <th>RH</th>
						                <th>Régimen</th>
						                <th>E-mail</th>
						                <th>Sede</th>
							            <th>Opciones</th>
							        </tr>
			               		</thead>
			               		<tbody id="bodyPersona" >
			               		</tbody>
			               	</table>
						</div>
				   	</div>
				</div">
			</article>
		</div>
	</section>
    
    <script src="../js/Librerias/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="../js/Librerias/jquery.ambiance.js"></script>
	<script type="text/javascript" src="../js/Librerias/materialize - copia.js"></script>
	<script type="text/javascript" src="../js/datatable/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="../js/datatable/dataTables.material.min.js"></script>
	<script type="text/javascript" src="../js/datatable/buttons.flash.min.js"></script>
	<script type="text/javascript" src="../js/datatable/buttons.html5.min.js"></script>
	<script type="text/javascript" src="../js/datatable/buttons.print.min.js"></script>
	<script type="text/javascript" src="../js/datatable/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="../js/datatable/jszip.min.js"></script>
	<script type="text/javascript" src="../js/datatable/pdfmake.min.js"></script>
	<script type="text/javascript" src="../js/datatable/vfs_fonts.js"></script>
	<script>
		$(document).ready(function(){
    	$('select').formSelect();
    	$(".tabs").tabs();
	  	});
		$(document).ready(function() {
	    	$('input#input_text, textarea#textarea2').characterCounter();
	  	});

		window.addEventListener('load', inicio, false);

	    function inicio() {
	        document.getElementById('txtPerFoto').addEventListener('change', cargar, false);               
	    }

	    function cargar(ev) {
	        var arch=new FileReader();
	        arch.addEventListener('load',leer,false);
	        arch.readAsDataURL(ev.target.files[0]);
	    }
	    
	    function leer(ev) {
	        document.getElementById('imagen').style.backgroundImage="url('" + ev.target.result + "')";
	    }


	</script>
	<script type="text/javascript" src="../js/usuarios/persona.js"></script>
	
</html>
