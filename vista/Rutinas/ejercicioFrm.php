  <link rel="stylesheet" type="text/css" href="../css/Librerias/materialize.css">
  <link rel="stylesheet" type="text/css" href="../css/Rutinas/ejerciciosFrm.css">
  <section class="container">
    <div class="row">
    <h3 class="center-align">Ejercicios</h3>

      <article class="col s6 offset-s3">
        <!-- Modal Crear-->
        <article>
          <div id="modalCrear" class="modalMediano">
            <div class="modalMediano-content">
              <h4>Crear Ejercicio</h4>
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
              <h4>Modificar Ejercicio</h4>
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
    </div>
    <div class="row">

      <div id="">
        <table id="tEjercicio">
          <thead>
                <tr>
                  <td>Tipo de ejercicio</td>
                  <td>Nombre ejercicio</td>
                  <td>Detalles</td>
                  <td>Imagen</td>
                  <td>Opciones</td>
                </tr>
              </thead>
              <tbody id="tblEjercicios">

              </tbody>
        </table>
      </div>

    </div>
  </section>
      <div class="fixed-action-btn ">
           <a class="btn-floating btn-large waves-effect waves-light btn modalMediano-trigger" data-target="modalCrear">
            <i class="large material-icons">add</i>
          </a>
    </div>
  <script type="text/javascript" src="../js/Librerias/materialize - copia.js"></script>
  <script type="text/javascript" src="../js/Rutinas/ejercicio.js"></script>
