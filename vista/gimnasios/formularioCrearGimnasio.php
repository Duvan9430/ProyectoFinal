<form method="POST" id="crearGimnasioFrm">
          <div class="row">
          <!--Txt Nombre del Gimnasio-->
          <div class="input-field col s6">
              <i class="material-icons prefix">mode_edit</i>
              <textarea id="txtagimNombre" name="txtagimNombre" class="materialize-textarea"></textarea>
              <label for="icon_prefix2">Nombre del gimnasio</label>
          </div>
          
          <!--Txt Dirección del Gimnasio-->
          <div class="input-field col s6">
              <i class="material-icons prefix">fitness_center</i>
                <select name="sltDireccion" name="sltDireccion">
                  <option value="">Escoja un Centro de Formación</option>
                  <?php 
                  require_once('../../modelo/Conexion.php');

                  $miConexion = new Conexion();
                  $consulta = "SELECT * FROM centroformacion";
                  $resultado = $miConexion->prepare($consulta);
                  $resultado->execute();
                  $datos = $resultado->fetchAll(\PDO::FETCH_OBJ);

                  foreach ($datos as $key => $dato) {
                    ?>
                    <option value="<?php echo $dato->idCentroFormacion ?>"><?php echo $dato->cefNombre ?></option>
                    <?php
                  }
                ?>
                </select>
          </div>
          </div>
          <div class="row">
          <!--Txt Sede del Gimnasio-->
          <div class="input-field col s6">
              <i class="material-icons prefix">directions_bike</i>
              <select id="sltSede" name="sltSede">
                <option value="-1">Escoja una Sede</option>
                <?php 
                  require_once('../../modelo/Conexion.php');

                  $miConexion = new Conexion();
                  $consulta = "SELECT * FROM sede";
                  $resultado = $miConexion->prepare($consulta);
                  $resultado->execute();
                  $datos = $resultado->fetchAll(\PDO::FETCH_OBJ);

                  foreach ($datos as $key => $dato) {
                    ?>
                    <option value="<?php echo $dato->idSede ?>"><?php echo $dato->sedNombre ?></option>
                    <?php
                  }
                ?>
              </select>
          </div>
          <!--Cargar imagenes gimnasio-->
            <div class="file-field input-field col s6">
                <div class="btn teal darken-3">
                  <span>Imagen</span>
                  <input type="file" id="txtimgGimnasio" name="txtimgGimnasio" multiple>
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" placeholder="Seleccione El Archivo Correspondiente" required>
                </div>
            </div>
          </div>

          <div class="row">
          <!--Txt Descripción Gimnasio-->
          <div class="input-field col s12">
               <i class="material-icons prefix">mode_edit</i>
              <textarea id="txtadescripcionGimnasio" name="txtadescripcionGimnasio" class="materialize-textarea" data-length=""></textarea>
              <label for="textarea2">Descripción</label>
            </div>
          </div>
          <br><br>

          <center> <a type="button" class="modalGrande-close waves-effect waves-green btn-flat btn btn-default" id="btnCrear" name="btnCrear">Guardar</a>

          <a  style="background-color:#fc7323;" class="modalGrande-close waves-effect waves-orange btn-flat" type="button"> Salir</a></center>
</form>