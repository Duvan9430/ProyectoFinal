  <link rel="stylesheet" href="../css/Librerias/materialize.min.css">
  <link rel="stylesheet" href="../css/Librerias/bitnami.css">
  <link rel="stylesheet" type="text/css" href="../css/Librerias/jquery.ambiance.css">
  <link rel="stylesheet" type="text/css" href="../css/Librerias/materialize.css">
  <section class="container">
    <div class="card">
      <div class="card-body">
        <div class="row"><!--FILA TITULO-->
          <br>
          <h3 class="center-align">Gimnasio</h3>
          <br>
          <div class=" float-button">
            <a class="btn-floating btn-large btn-principal waves-effect waves-light btn modalGrande-trigger " href="#modal1"><i class="large material-icons">add</i></a>            
          </div>
          <article class="col s12 ">
          <!-- <form method="POST" id="crearGimnasioFrm" action="../Entidad/ctrlCreateGimnasio.php">-->

              <article class="col s6 offset-s3">                         
                <div id="modal1" class="modalGrande">
                  <div class="modalGrande-content">
                    <h5>Agregar Gimnasio</h5>
                    <?php include('formularioCrearGimnasio.php');?>
                  </div>
                </div>
              </article> 

            <!--modal Editar-->
            <article class="col s6 offset-s3">
              <div id="modalEditar" class="modalGrande">
                <div class="modalGrande-content">
                  <h5>Modificar Gimnasio</h5>
                  <?php include('formularioModificarGimnasio.php');?>
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
                  <h5>¿Esta seguro de eliminar el Registro?</h5>
                </div>
                <div class="modal-footer">
                  <button id="btnEliminar" name="btnEliminar" style="background-color:#fc7323;" class="modal-close waves-effect waves-green btn-flat" type="button">Eliminar</button> 
                </div>
              </div>         
            </article>
            <table class="centered" class="responsive-table" id="tablaGimnasio">
              <thead class="thead-dark">
              <tr>
                <th>Nombre</th>
                <th>Sede</th>
                <th>Centro de Formación</th>
                <th>Imagen</th>
                <th>Descripción</th>
                <th>Opciones</th>
              </tr>
              </thead>
              <tbody id="bodyGimnasio"> 
              </tbody>
            </table>
          </article>
        </div>
      </div>
    </div>
  </section>

<script type="text/javascript" src="../js/Librerias/jquery-3.3.1.js"></script>
<script type="text/javascript"src="../js/Librerias/jquery.ambiance.js"></script>
<script type="text/javascript" src="../js/Librerias/materialize - copia.js"></script>
<script type="text/javascript" src="../js/gimnasios/Global.js"></script>
<script type="text/javascript" src="../js/gimnasios/gimnasio.js"></script>