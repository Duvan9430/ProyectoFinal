	<meta charset="UTF-8">
	<title>Adicionar Maquinas</title>
  	<link rel="stylesheet" href="../css/Librerias/materialize.min.css">
	<link rel="stylesheet" href="../css/Librerias/bitnami.css">
  	<link rel="stylesheet" type="text/css" href="../css/Librerias/jquery.ambiance.css">
	 <!-- Libreria Materialize -->
     <link rel="stylesheet" type="text/css" href="../css/Librerias/materialize.css">
     <!-- Estilos de la Pagina -->
	<section class="container">
		<div class="card ">
			<div class="card-body">
				<div class="row">
					<br>
					<h3 class="center-align">Máquina</h3>
					<br>
					<!--Form 1-->
					<div class="float-button ">
						<a class="btn-floating btn-large btn-principal waves-effect waves-light btn modalGrande-trigger" href="#modal1">
						<i class="large material-icons">add</i>
						</a>
				    </div>
					<article class="col s12 ">	
						<article class="col s6 offset-s3">		       
							<div id="modal1" class="modalGrande">
								<div class="modalGrande-content">
									<h5>Agregar Maquina</h5>
									<?php include('formularioCrearMaquina.php');?>
								</div>
							</div>
						</article> 

		                <!--modal Editar-->
						<article class="col s6 offset-s3">	       
							<div id="modalEditar" class="modalGrande">
								<div class="modalGrande-content">
								   	<h5>Modificar Maquina</h5>
									<?php include('formularioModificarMaquina.php');?>
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
						        	<h5>Seguro desea eliminar la Maquina</h5>
						        </div>
						        <div class="modal-footer">
									<button id="btnEliminar" name="btnEliminar" style="background-color:#fc7323;" class="modal-close waves-effect waves-green btn-flat" type="button">Eliminar</button> 
						        </div>
						    </div>
						</article>
						<table class="centered" class="responsive-table" id="tablaMaquina">
							<thead class="thead-dark">
							<tr>
								<th>Nombre Máquina</th>
								<th>Codigo</th>
								<th>Descripción</th>
								<th>Observación</th>
								<th>Img</th>
								<th>Opciones</th>
							</tr>
							</thead>
							<tbody id="bodyMaquina">
						    </tbody>
						</table>
					</article>
				</div>
			</div>
		</div>
	</section>
</body>
		   
    
    <script src="../js/Librerias/jquery-3.3.1.js"></script>
	<script src="../js/Librerias/materialize.min.js"></script>
	<script type="text/javascript" src="../js/Librerias/jquery.ambiance.js"></script>
	<script type="text/javascript" src="../js/Librerias/materialize - copia.js"></script>
	<script language="javascript" type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
	<script>
 
		 
	</script>
	<script type="text/javascript" src="../js/gimnasios/maquina.js"></script>
</html>
