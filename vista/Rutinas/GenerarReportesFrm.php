<link rel="stylesheet" type="text/css" href="../css/Librerias/dataTables.material.min.css">
<link rel="stylesheet" type="text/css" href="../css/Librerias/materialize.min.normalmodal.css">
<link rel="stylesheet" type="text/css" href="../css/Rutinas/frmGenerarReporte.css">
<link rel="stylesheet" type="text/css" href="../css/Librerias/material.min.css">
	
<div class="container" id="contenido">
	&nbsp
  <div class="card">
    <div class="card-header">
      <h3 class="header" style="font-family: verdana;">Generar Reportes   </h3>
			<div class="fixed-action-btn horizontal float-button ">
  			<a class="btn-floating btn-large btn-principal buscar">
    			<i class="large material-icons">search</i>
  			</a>
	  		<ul>
	    		<li><a class="btn-floating btn-sub tooltipped modal-trigger" data-position="top" data-tooltip="Consultar Maquinas" data-target="modalMaquinas"><i class="material-icons">fitness_center</i></a></li>

	    		<li><a class="btn-floating btn-sub tooltipped modal-trigger" data-position="top" data-tooltip="Consultar Asistencia" data-target="modalAsistencia"><i class="material-icons">content_paste</i></a></li>

	    	</ul>
      </div>
		<hr/>
    </div>

    <div class="card-body">
		  <div class="row">
    		<div class="col s12">
      		<ul class="tabs">
            <li class="tab col s6"><a href="#Maquina" style="font-size: 16px; font-family: verdana;">MAQUINAS</a></li>
        		<li class="tab col s6"><a href="#Asistencia" style="font-size: 16px; font-family: verdana;">ASISTENCIA</a></li>
      		</ul>
    		</div>
        &nbsp
        <div id="Asistencia" class="col s12">

        </div>
        <div id="Maquina" class="col s12">
      		
        </div>
  	  </div>
	  </div>
	  &nbsp
  </div>
</div>

<div id="modalMaquinas" class="modal">
  <div class="modal-content">
    <h4 class="header" style="font-family: verdana; font-weight: bold;">Maquinas</h4>
    <div class="form-group">
      <form id="frmMaquina">   
        <label>Seleccione tipo de búsqueda:</label>
        <select name="selectMaquina" id="selectMaquina">
          <option value="" disabled selected><p>Seleccione</p></option>
          <option value="maqNombre" ><p>Nombre</p></option>
          <option value="maqCodigo" ><p>Codigo</p></option>
        </select>
        &nbsp;  &nbsp; &nbsp; &nbsp; 
        </br>
        <div class="row">
          <div class="input-field col s11">
            <input type="text" name="textMaquina" id="textMaquina" class="form-control" autocomplete="off">
          </div>
          <a class="btn-floating btn-large btn-principal buscar modal-close" id="btnMaquina">
            <i class="large material-icons">search</i>
          </a>
        </div>
      </form>
    </div>    
          
    <div class="modal-footer">
      <div class="valing center">
        <button type="button" class="btn btn-primary modal-close " data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<div id="modalAsistencia" class="modal">
  <div class="modal-content">
          
    <h4 class="header" style="font-family: verdana; font-weight: bold;">Asistencia</h4>
    <div class="form-group">
      <form id="frmAsistencia">   
        <label>Seleccione tipo de búsqueda:</label>
        <select name="selectAsistencia" id="selectAsistencia">
          <option value="" disabled selected><span>Seleccione</span></option>
          <option value="perNit"><span>Documento de identidad</span></option>
          <option value="ficNumero"><span>Número de ficha</span></option>
        </select>
        &nbsp; &nbsp; &nbsp; &nbsp; 
        </br>

        <div class="row">
          <div class="input-field col s11">
            <input type="text" name="txtAsistencia" id="txtAsistencia" class="form-control" autocomplete="off">
          </div>
          <a class="btn-floating btn-large btn-principal buscar modal-close" id="btnAsistencia">
            <i class="large material-icons">search</i>
          </a>

        </div>
      </form>
    </div>
  </div>    
  <div class="modal-footer">
    <div class="valing center">
      <button type="button" class="btn btn-primary modal-close " data-dismiss="modal">Cancelar</button>
    </div>
  </div>
</div>

<script type="text/javascript" src="../js/Rutinas/frmGenerarReporte.js"></script>
<script type="text/javascript" src="../js/datatable/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../js/datatable/dataTables.material.min.js"></script>
<script type="text/javascript" src="../js/datatable/buttons.flash.min.js"></script>
<script type="text/javascript" src="../js/datatable/buttons.html5.min.js"></script>
<script type="text/javascript" src="../js/datatable/buttons.print.min.js"></script>
<script type="text/javascript" src="../js/datatable/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="../js/datatable/jszip.min.js"></script>
<script type="text/javascript" src="../js/datatable/pdfmake.min.js"></script>
<script type="text/javascript" src="../js/datatable/vfs_fonts.js"></script>
