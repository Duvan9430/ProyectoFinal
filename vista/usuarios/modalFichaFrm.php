
  <link rel="stylesheet" type="text/css" href="../css/Librerias/bitnami.css">
  <!-- Libreria Materialize -->
  <link rel="stylesheet" type="text/css" href="../css/Librerias/materialize.css">
  <!-- Estilos de la Pagina -->

  <link rel="stylesheet" type="text/css" href="../css/Librerias/dataTables.material.min.css">
  <link rel="stylesheet" type="text/css" href="../css/Librerias/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="../css/Librerias/buttons.dataTables.min.css">

  <div class="container" id="contenido">
  <!-- Contenido -->
  <div class="card">
    <div class="card-header">
      <section class="container">
        <div class="row">
        <h4 class="center-align">Ficha</h4>
        <div class="fixed-action-btn horizontal ">
                <a class="btn-floating btn-large btn-principal waves-effect waves-light btn modalMediano-trigger left-align posicion" href="#modal2">
                <i class="large material-icons">add</i>
              </a>
        </div>
          <article class="col s6 offset-s3">
            
            <div id="modal2" class="modalMediano">
              <div class="modalMediano-content">
                <h3>Crear Ficha</h3>
                  <?php include 'fichaFrm.php'; ?>
              </div>
              <div class="modalMediano-footer">
                <a class="modalMediano-close waves-effect waves-light btn" name="btnGuardar" id="btnGuardar" style="background-color: #fc7323; color: black; font-weight: bold"><i class="material-icons right">send</i>Guardar</a>
              </div>
            </div>         
          </article>

          <article class="col s6 offset-s3">     
            <div id="modalModificar" class="modalMediano">
              <div class="modalMediano-content">
                <h3>Modificar Ficha</h3>
                <div id="Modificar">
                  
                </div>
              </div>
              <div class="modalMediano-footer">
                <a class="modalMediano-close waves-effect waves-light btn" name="btnModificar" id="btnModificar" style="background-color: #fc7323; color: black; font-weight: bold"><i class="material-icons right">send</i>Modificar</a>
              </div>
            </div>         
          </article>

          <article class="col s6 offset-s3">     
            <div id="modalEliminar" class="modalMediano">
              <div class="modalMediano-content">
                <h3>Eliminar Ficha</h3>
                <div id="Eliminar">
                  
                </div>
              </div>
              <div class="modalMediano-footer">
                <a class="modalMediano-close waves-effect waves-light btn" name="btnEliminar" id="btnEliminar" style="background-color: #fc7323; color: black; font-weight: bold"><i class="material-icons right">send</i>Eliminar</a>
              </div>
            </div>         
          </article>
           &nbsp
           <div class="row">
          <table class="table table-striped table-bordered centered display" id="tablaFicha">
      <thead>
        <tr>
          <th>Número Ficha</th>
          <th>Nombre Ficha </th>
          <th>opciones</th>
        </tr>
      </thead>
      <tbody  id="tFicha">
        
      </tbody>
    </table>
    </div>
      </section>
    </div>  
  </div>    
  <!--contenido -->
</div>
    
  <!-- Jquery -->
  <script type="text/javascript" src="../js/Librerias/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="../js/Librerias/jquery.dataTables.min.js"></script>
  <!-- Script Materialize -->
  <script type="text/javascript" src="../js/Librerias/materialize - copia.js"></script>
  <!-- Script de la pagina -->
  <script type="text/javascript" src="../js/Librerias/Global.js"></script>  
  <script type="text/javascript" src="../js/Librerias/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="../js/Librerias/buttons.flash.min.js"></script>
  <script type="text/javascript" src="../js/Librerias/jszip.min.js"></script>
  <script type="text/javascript" src="../js/Librerias/pdfmake.min.js"></script>
  <script type="text/javascript" src="../js/Librerias/vfs_fonts.js"></script>
  <script type="text/javascript" src="../js/Librerias/buttons.html5.min.js"></script>
  <script type="text/javascript" src="../js/Librerias/buttons.print.min.js"></script>
 
  <script type="text/javascript" src="../js/usuarios/ficha.js"></script>
