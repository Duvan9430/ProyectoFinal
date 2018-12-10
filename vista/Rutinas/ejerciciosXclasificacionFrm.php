 	<!-- Load c3.css -->
	<link rel="stylesheet" type="text/css" href="../css/Librerias/bitnami.css">
	<!-- Libreria Materialize -->
	<link rel="stylesheet" type="text/css" href="../css/Librerias/materialize.css">
	<!-- Estilos de la Pagina -->
	<link rel="stylesheet" type="text/css" href="../css/Rutinas/frmConsultarRutinaAprendiz.css">
	<link rel="stylesheet" type="text/css" href="../css/Librerias/jquery.dataTables.min.css">
  	<link rel="stylesheet" type="text/css" href="../css/Librerias/buttons.dataTables.min.css">

	<div class="container valign center" id="contenido" >
		<h3 class="header">Ejercicios Por Clasificación</h3>


	<div class="row">
    	<div class="col s11">
      		<ul  id="tab" class="tabs">
        		<li class="tab col s4"><a href="#Pecho" >Pecho</a></li>
        		<li class="tab col s4"><a href="#Espalda" >Espalda</a></li>
            	<li class="tab col s4"><a href="#Pierna" >Piernas</a></li>
      		</ul>
      </div>
    </div>
	</div>


	<div id="Pecho" class="col s12">
		<div class="container">
			<div class="row">
					<div id="TablaPecho">
					</div>
				</div>
		</div>
	</div>
	<div id="Espalda" class="col s12">
		<div class="container">
			<div class="row">
				<div id="TablaEspalda">
				</div>
			</div>
		</div>
	</div>
	<div id="Pierna" class="col s12">
		<div class="container">
			<div class="row">
				<div id="TablaPierna">
				</div>

			</div>
		</div>
	</div>

	<script type="text/javascript" src="../js/Librerias/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/Librerias/jquery-ui.js"></script>
	<script type="text/javascript" src="../js/Rutinas/ejerciciosXclasificacion.js"></script>
	<!-- Script Materialize -->
	<script type="text/javascript" src="../js/Librerias/materialize.min.js"></script>
	<!-- Script de la pagina -->
	<script type="text/javascript" src="../js/datatable/jquery.dataTables.min.js"></script>

