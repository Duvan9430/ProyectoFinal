<link rel="stylesheet" type="text/css" href="../css/Librerias/materialize.css">
<link rel="stylesheet" type="text/css" href="../css/Rutinas/estilos.css">

<!-- Contenido -->
<section class="container">
  <div class="row">
    <h3 class="center-align">Ejercicio Musculo</h3>
    <div class="fixed-action-btn horizontal">
      <a class="btn-floating btn-large btn-principal waves-effect waves-light btn modalMediano-trigger left-align posicion" href="#modalCrear">
        <i class="large material-icons">add</i>
      </a>
    </div>
    <!-- Modal -->
    
    <article>
      <div id="modalCrear" class="modalMediano">
        <div class="modalMediano-content">
          <h4>Ejercicio Musculos</h4>
          <div id="cont">
            <form id="MusculoEjercicioForm">
              <label>Ejercicio<label>
              <div class="input-field col s12">
                <select name="sltEjercicio" id="sltEjercicio" class="browser-default">

                </select>
              </div>
              <h5>Musculos</h5>
              <div id="musculos">

              </div>
            <form>
          </div>
        </div>
        <div class="modalMediano-footer">
          <a class="modalMediano-close waves-effect waves-light btn" name="btnGuardarejeM" id="btnGuardarejeM" style="background-color: #fc7323; color: black; font-weight: bold"><i class="material-icons right">send</i>Guardar</a>
        </div>
      </div>
    </article>
    <!-- fin modal-->
    <!-- Modal Editar-->
    <article>
      <div id="modalEditar" class="modalMediano">
        <div class="modalMediano-content">
          <h4>Editar Ejercicio Musculos</h4>
          <div id="formularioEditar">

          </div>
        </div>
        <div class="modalMediano-footer">
          <a class="modalMediano-close waves-effect waves-light btn" name="btnGuardarMo" id="btnGuardarMo" style="background-color: #fc7323; color: black; font-weight: bold"><i class="material-icons right">send</i>Guardar</a>
        </div>
      </div>
    </article>
    <!-- fin modal-->
    <!-- Modal Eliminar-->
    <article>
      <div id="modalEliminar" class="modal">
        <div class="modal-content">
          <h6>Eliminar Ejercicio Musculos</h6>
          <div id="eliminar">

          </div>
        </div>
        <div class="modal-footer">
          <a class="modal-close waves-effect waves-light btn" name="btnEliminar" id="btnEliminar" style="background-color: #fc7323; color: black; font-weight: bold"><i class="material-icons right">delete_forever</i>Eliminar</a>
        </div>
      </div>
    </article>
    <!-- fin modal-->
    </div>
    <div class="row">

      <div id="">
        <table id="tEjercicio">
          <thead>
                <tr>
                  <td>Ejercicio</td>
                  <td>Musculo</td>
                  <td>Detalles</td>
                  <td>Imagen</td>
                  <td>Opciones</td>
                </tr>
              </thead>
              <tbody id="tblEjercicioMusculo">

              </tbody>
        </table>
      </div>
    </div>
</section>

<script type="text/javascript" src="../js/Librerias/materialize - copia.js"></script>
<script type="text/javascript" src="../js/Rutinas/ejercicioMusculo.js"></script>
