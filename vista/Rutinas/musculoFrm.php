  <link rel="stylesheet" type="text/css" href="../css/Librerias/materialize.css">
  <link rel="stylesheet" type="text/css" href="../css/Rutinas/ejerciciosFrm.css">
  <!-- Contenido -->
  <section class="container">
    <div class="row">
    <h3 class="center-align">Musculo</h3>
    <div class="fixed-action-btn">
           <a class="btn-floating btn-large btn-principal waves-effect waves-light btn modalMediano-trigger" href="#modalCrear">
            <i class="large material-icons">add</i>
          </a>
    </div>
      <article class="col s6 offset-s3">
          <!-- Modal Crear-->
          <article>
            <div id="modalCrear" class="modalMediano">
              <div class="modalMediano-content">
                <h4>Crear Musculo</h4>
                <div id="formularioCreate">

                </div>
              </div>
              <div class="modalMediano-footer">
                <a class="modalMediano-close waves-effect waves-light btn" name="btnGuardar" id="btnGuardar" style="background-color: #fc7323; color: black; font-weight: bold"><i class="material-icons right">send</i>Guardar</a>
              </div>
            </div>
          </article>
          <!-- fin modal-->
          <!-- Modal Editar-->
          <article>
            <div id="modalEditar" class="modalMediano">
              <div class="modalMediano-content">
                <h4>Modificar Musculo</h4>
                <div id="formularioModificar">

                </div>
              </div>
              <div class="modalMediano-footer">
                <a class="modalMediano-close waves-effect waves-light btn" name="btnModificar" id="btnModificar" style="background-color: #fc7323; color: black; font-weight: bold"><i class="material-icons right">send</i>Guardar</a>
              </div>
            </div>
          </article>
          <!-- fin modal-->
          <!-- Modal Eliminar-->
      <article>
        <div id="modalEliminar" class="modal">
          <div class="modal-content">
            <h6><strong>Eliminar El Ejercicio</strong></h6>
            <div id="eliminar">

            </div>
          </div>
          <div class="modal-footer">
            <a class="modal-close waves-effect waves-light btn" name="btnEliminar" id="btnEliminar" style="background-color: #fc7323; color: black; font-weight: bold"><i class="material-icons right">delete_forever</i>Eliminar</a>
          </div>
        </div>
      </article>
      <!-- fin modal-->
      </article>
      <br>
      <article>
        <table id="tMusculo">
          <thead>
                <tr>
                  <td>Clasificación</td>
                  <td>Musculo</td>
                  <td>Opciones</td>
                </tr>
              </thead>
              <tbody id="tblMusculo">

              </tbody>
        </table>
      </article>
  </section>
  
  <script type="text/javascript" src="../js/Librerias/materialize - copia.js"></script>
  <script type="text/javascript" src="../js/Rutinas/musculo.js"></script>