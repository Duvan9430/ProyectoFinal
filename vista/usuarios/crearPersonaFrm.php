<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Adicionar Personas</title>
	 <link rel="stylesheet" href="../Css/css/materialize.min.css">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="../Css/css/jquery.ambiance.css">
	 <link rel="stylesheet" type="text/css" href="../Css/css/bitnami.css">
	 <!-- Libreria Materialize -->
     <link rel="stylesheet" type="text/css" href="../Css/css/materialize.css">
     <!-- Estilos de la Pagina -->
     <link rel="stylesheet" type="text/css" href="../Css/css/estilos.css"> 
</head>
<body>
	<!-- Banner -->
  <header><img src="../Imagenes/banner-main.PNG"></header>
<!-- Barra de navegacion -->
	<nav>
    	<div class="categories-wrapper z-depth-4">
        	<div class="categories-container">
            	<ul class="categories container">
              		<img src="../Imagenes/Logo2.png" class="logo right">
                	<li class="active"><a href="#all"></a></li>
            	</ul>
        	</div>
    	</div>
  	</nav>
	<section class="container">
		&nbsp
		<div class="row">
			<div class="col s12">
				<ul class="tabs">
					<li class="tab col s6"><a href="#crearPersonaFrm">Registrar Persona</a></li>
					<li class="tab col s6"><a href="#tablaPersona">Consultas</a></li>
				</ul>
			</div>	
			&nbsp
			<h3 class="center-align">Registrar Persona</h3>
			<form id="crearPersonaFrm">
				<div class="card">
				<!--Txt Nombre-->
					<div class="row col-12">
					   	<div class="input-field col s4">	
					   	</div>
					   	<div class="input-field col s4 center">
					   		<img src="../Img/yana.png" alt="" class="circle responsive-img" style="width:150px; height:150px;" id="imgSalida" name="imgSalida">
					   	</div>
						<div class="file-field input-field col s4">
					    	<div class="btn">
					        	<span>File</span>
					        	<input type="file" id="txtPerFoto" name="txtPerFoto" multiple>
					      	</div>
					      	<div class="file-path-wrapper">
					        	<input class="file-path validate" type="text" placeholder="Seleccione su foto">
					      	</div>
				    	</div>
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
  				<a id="btnCrear" name="btnCrear" style="background-color:#fc7323;" class="modalGrande-close waves-effect waves-green btn-flat" type="button"><i class="material-icons">send</i> Guardar</a>
			</form>
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
				        	<a id="btnModificar" name="btnModificar" style="background-color:#fc7323;" class="modalGrande-close waves-effect waves-green btn-flat" type="button"><i class="material-icons">send</i> Guardar</a>
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
			    <div class="row justify-content-center" >
				   	<div class="col-10">
		               	<table class="table table-striped table-border centered display" id="tablaPersona" style="width: 100%">
		               		<thead class="thead-dark" style="background-color: black;color: #ffffff;">
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
			</article>
		</div>
	</section>
	    <footer class="page-footer">
	        <div class="container">
	            <div class="row">
	              <div class="col l6 s12">
	                <h5 class="white-text">EBG</h5>
	                <p class="grey-text text-lighten-4">Energetic Body Gym</p>
	              </div>
	            </div>
	        </div>
	        <div class="footer-copyright">
	            <div class="container">
		            <a href="http://www.sena.edu.co/" target="_blank" class="grey-text text-lighten-4 left">
		              	<h6>&nbsp;&nbsp;© ADSI 1446435</h6>
		            </a>
		            <a href="http://www.sena.edu.co/" target="_blank" class="grey-text text-lighten-4 right">
		              <img src="../Imagenes/logo.png" width="40px" height="40px">
		            </a>
		            <a href="http://oferta.senasofiaplus.edu.co/" target="_blank" class="grey-text text-lighten-4 right">
		              <img src="../Imagenes/developers-V2.png" width="55px" height="46px">
		            </a>
	            </div>
	        </div>
        </footer>
	
</body>
    
    <script src="../Js/js/jquery-3.3.1.js"></script>
	<script src="../Js/js/materialize.min.js"></script>
	<script type="text/javascript" src="../Js/js/jquery.ambiance.js"></script>
	<script type="text/javascript" src="../Js/js/materialize - copia.js"></script>
	<script type="text/javascript" src="../Js/js/Global.js"></script> 
	<script type="text/javascript" src="../Js/js/jquery-ui.min.js"></script> 
	<script>
		$(document).ready(function(){
    	$('select').formSelect();
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
	<script type="text/javascript" src="../Js/persona.js"></script>
	<script type="text/javascript" src="../Js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="../Js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="../Js/dataTables.bootstrap4.min.js"></script>
	
</html>
