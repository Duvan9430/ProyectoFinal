  <!-- Iconos -->
  <link rel="stylesheet" type="text/css" href="../css/Librerias/bitnami.css">
  <!-- Libreria Materialize -->
  <link rel="stylesheet" type="text/css" href="../css/Librerias/materialize.css">
  <!-- Estilos de la Pagina -->
 
  <div class="container" id="contenido">
  <!-- Contenido -->
  <div class="card">
    <div class="card-header">
      <section class="container">
        <div class="row">
        <h4 class="center-align">Tipo Documento</h4>
        <div class="fixed-action-btn horizontal">
                <a class="btn-floating btn-large btn-principal waves-effect waves-light btn modal-trigger left-align posicion" href="#modal2">
                <i class="large material-icons">add</i>
              </a>
        </div>
        
          

          <article class="col s6 offset-s3">
            
            <div id="modal2" class="modal">
              <div class="modal-content">
                <h5 class="header center">Crear Tipo Documento</h5>
                  <?php include 'tipoDocumentoFrm.php'; ?>
              </div>
              <div class="modal-footer">
                <a class="modal-close waves-effect waves-light btn" name="btnGuardar" id="btnGuardar" style="background-color: #fc7323; color: black; font-weight: bold"><i class="material-icons right">send</i>Guardar</a>
              </div>
            </div>         
          </article>

          <article class="col s6 offset-s3">     
            <div id="modalModificar" class="modal">
              <div class="modal-content">
                <h5 class="header center">Modificar Tipo Documento</h5>
                <div id="Modificar">
                  
                </div>
              </div>
              <div class="modal-footer">
                <a class="modal-close waves-effect waves-light btn" name="btnModificar" id="btnModificar" style="background-color: #fc7323; color: black; font-weight: bold"><i class="material-icons right">send</i>Modificar</a>
              </div>
            </div>         
          </article>

          <article class="col s6 offset-s3">     
            <div id="modalEliminar" class="modal">
              <div class="modal-content">
                <h6>¿Esta seguro de eliminar este tipo documento?</h6>
                <div id="Eliminar">
                  
                </div>
              </div>
              <div class="modal-footer">
                <a class="modal-close waves-effect waves-light btn" name="btnEliminar" id="btnEliminar" style="background-color: #fc7323; color: black; font-weight: bold"><i class="material-icons right">send</i>Eliminar</a>
              </div>
            </div>         
          </article>
           &nbsp
           <div class="row">

               
          <table  class="table table-striped table-bordered centered display" style="width: 100"   id="tablaTipoDocumento">
      <thead>
        <tr>
          <th>Nombre Documento</th>
          <th>Abreviación </th>
          <th>opciones</th>
        </tr>
      </thead>
      <tbody  id="tDocumento">
        
      </tbody>
    </table>
    </div>
      </section>
    </div>  
  </div>    
  <!--contenido -->
</div>
&nbsp

  
  <!-- Jquery -->
  <script type="text/javascript" src="../js/Librerias/jquery-3.3.1.min.js"></script>
  <!-- Script Materialize -->
  <script type="text/javascript" src="../js/Librerias/materialize - copia.js"></script>
  <!-- Script de la pagina -->
  <script type="text/javascript" src="../js/usuarios/tipoDocumento.js"></script>
