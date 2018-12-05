<link rel="stylesheet" type="text/css" href="../css/Rutinas/frmClasificacionRutina.css">
<link rel="stylesheet" type="text/css" href="../css/Librerias/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="../css/Librerias/buttons.dataTables.min.css">
	  	
		
<!-- Contenido -->
<div class="valign center">
	<h2 class="header">Reportes</h4><br>
</div>
<div class="container" style="width: 70%;">	
	<div class="row" >
		<div class="col s6">
			<div class="graficamrk">
				<div id="chartContainer" style="height: 370px; max-width: 530px; padding-top:3%; padding-right:-85%;font-size:10%;">
			</div>
		</div>
	</div>
		
	<div  class="col s6" id="Circulo" style="height: 370px; max-width: 620px; margin: 0px auto; padding-right:-20%;"></div>
	
	</div>
	
	<div class="row">
		<div class="col s6" align="center">
			<h5>Consultar Grafico(IMSC)</h5>
			<div class="input-field">
	     		 <label class="active" for="txtFecha">Año De Inicio</label>
	  			<input name="txtFecha" id="txtFecha" type="number"   data-length="4">
	  		</div>
	  		<div class="input-field">
	     		<label class="active" for="txtFechaAlquiler2">Año De Fin</label>
	     		<input name="txtFechaAlquiler2" id="txtFechaAlquiler2" type="number"  data-length="4" >
			</div>
	    	<a class="waves-effect waves-light btn" id="btnConsultarGrafica"><i class="material-icons right">search</i>Consultar Año</a>

		</div>
		      
		<div class="col s6 card ">
			<div class="card-content" id="bodyUsuario">

			</div>
		</div>
  	</div>
</div>

<script type="text/javascript" src="../js/Librerias/jquery-ui.js"></script>
<script type="text/javascript" src="../js/Rutinas/indicemasaCorporal.js"></script>
<script src="../js/Librerias/canvasjs.min.js"></script>
<script type="text/javascript" src="../js/Librerias/jspdf.min.js"></script>
<!-- Script de la pagina -->
<script type="text/javascript" src="../js/DataTable/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="../js/Librerias/Chart.js"></script>
<script type="text/javascript" src="../js/Librerias/Chart.bundle.min.js"></script>
	
<!--Botones de datatable -->
<script type="text/javascript" src="../js/datatable/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="../js/datatable/buttons.flash.min.js"></script>
<script type="text/javascript" src="../js/datatable/jszip.min.js"></script>
<script type="text/javascript" src="../js/datatable/vfs_fonts.js"></script>
<script type="text/javascript" src="../js/datatable/buttons.html5.min.js"></script>
<script type="text/javascript" src="../js/datatable/buttons.print.min.js"></script>
<script type="text/javascript" src="../js/Librerias/buttons.colVis.min.js"></script>
