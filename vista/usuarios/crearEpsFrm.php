<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Eps</title>
	 <link rel="stylesheet" href="../css/Librerias/materialize.min.css">
	
	 <link rel="stylesheet" type="text/css" href="../css/Librerias/jquery.ambiance.css">
	 <link rel="stylesheet" type="text/css" href="../css/Librerias/bitnami.css">
	 <!-- Libreria Materialize -->
     <link rel="stylesheet" type="text/css" href="../css/Librerias/materialize.css">
     <!-- Estilos de la Pagina -->
</head>
<body>     
	<section class="container">
		<div class="row">
					<h1 class="center-align">Eps</h1>
					<!--Form 1-->
					<div class="fixed-action-btn horizontal">
				        <a class="btn-floating btn-large btn-principal waves-effect waves-light btn modal-trigger left-align posicion" href="#modal1">
				            <i class="large material-icons">add</i>
				        </a>
		            </div>
				<article class="col s12 ">
						<article class="col s6 offset-s3">  
				            <div id="modal1" class="modal">
					            <div class="modal-content">
						            <h5 class="header center">Agregar Eps</h5>
						            &nbsp;
						            <?php
						             include('formularioCrear.php');
						            ?>
					            </div>
						        <div class="center-align">
         						  <a id="btnCrear" name="btnCrear" style="background-color:#fc7323;" class="-close waves-effect waves-green btn-flat" type="button"> Guardar<i class="material-icons right">send</i></a>
        						  </div>
        						  <br>
						        </div>
				            </div>  
					    </article> 
                       <!--modal Editar-->
					    <article class="col s6 offset-s3">
					       
				            <div id="modalEditar" class="modal">
					            <div class="modal-content">
						            <h5 class="header center"> Modificar Eps</h5>
						            &nbsp;
						            <?php
						             include('formularioModificar.php');
						            ?>
					            </div>

						       <div class="modal-footer">
								<div class="center-align">
         						  <a id="btnModificar" name="btnModificar" style="background-color:#fc7323;" class="modal-close waves-effect waves-green btn-flat" type="button"><i class="material-icons right">send</i> Guardar</a>
         						  <br>
        						  </div> 
        						</div>
					    </article> 
					    <!--fin modal Editar-->
						<!--modal Eliminar-->
						 <article class="col s6 offset-s3">
				       
				        <div id="modalEliminar" class="modal">
				          <div class="modal-content">
				            <h5 class="header center">¿Esta seguro de eliminar esta EPS?</h5>
				            &nbsp;
				          <div  id="Eliminar"></div>
				          </div>
				          <div class="modal-footer">

				          	<button id="btnEliminar" name="btnEliminar" style="background-color:#fc7323;"
				           class="modal-close waves-effect waves-green btn-flat" type="button">Eliminar</button> 
				          </div>
				        </div>         
				      </article>
						    <div class="row justify-content-center" >
							   	<div class="col-10">
					               	<table class="table table-striped table-bordered centered display" id="tablaEps" >
					               		<thead class="thead-dark">
											<tr>
							              <th>Codigo Eps</th>
							              <th>Nombre Eps</th>
							              <th>Opciones</th>
							            </tr>
					               		</thead>
					               		<tbody id="bodyEps">
					               		</tbody>
					               	</table>
								</div>
						   </div>
				</article>
		   </div>
	</section>
	    
</body>
    <script src="../js/Librerias/jquery-3.3.1.js"></script>
	<script src="../js/Librerias/materialize.min.js"></script>
	<script type="text/javascript" src="../js/Librerias/jquery.ambiance.js"></script>
	<script type="text/javascript" src="../js/Librerias/materialize - copia.js"></script>
	<script>
		 $(document).ready(function(){
    		$('select').formSelect();
  		});

		$(".modal").modal();
		   $(document).ready(function() {
    		$('input#input_text, textarea#textarea2').characterCounter();
  		});
	</script>
	<script type="text/javascript" src="../js/usuarios/eps.js"></script>
</html>
