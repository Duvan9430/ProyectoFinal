<!-- Iconos -->
<link rel="stylesheet" type="text/css" href="../../css/Librerias/bitnami.css">
<!-- Libreria Materialize -->
<link rel="stylesheet" type="text/css" href="../../css/Librerias/materialize.css">
<!-- Estilos de la Pagina -->
<link rel="stylesheet" type="text/css" href="../../css/Rutinas/estilos.css">

<!-- Contenido -->
<section class="container">
  <div class="row">
    <h3 class="center-align">Clasificación Rutina</h3>
    <div class="fixed-action-btn horizontal float-button ">
      <a class="btn-floating btn-large btn-principal waves-effect waves-light btn modalMediano-trigger left-align posicion" data-target="modalCrear">
        <i class="large material-icons">add</i>
      </a>
    </div>
    <!-- Modal Editar-->
    <article>
      <div id="modalCrear" class="modalMediano">
        <div class="modalMediano-content">
          <h4>Clasificación Rutina</h4>
          <div id="formulari">

          </div>
        </div>
        <div class="modalMediano-footer">
          <a class="modalMediano-close waves-effect waves-light btn" name="btnGuardar" id="btnGuardar" style="background-color: #fc7323; color: black; font-weight: bold"><i class="material-icons right">send</i>Guardar</a>
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
            <td>Nombre</td>
            <td>Descripción</td>
          </tr>
        </thead>
        <tbody id="tblClasificacionRutina">

        </tbody>
      </table>
    </div>

  </div>
</section>
<!--contenido -->

<!-- Jquery -->
<script type="text/javascript" src="../../js/Librerias/jquery-3.3.1.min.js"></script>
<!-- Script Materialize -->
<script type="text/javascript" src="../../js/Librerias/materialize - copia.js"></script>
<!-- Script de la pagina -->
<script type="text/javascript" src="../../js/Rutinas/Global.js"></script>
<!-- Script de ejercicio  -->
<script type="text/javascript" src="../../js/Rutinas/clasificacionRutina.js"></script>

