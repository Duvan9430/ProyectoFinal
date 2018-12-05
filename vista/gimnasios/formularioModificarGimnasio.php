<form method="POST" id="modificarGimnasioFrm">
          <div class="row">
          <!--Txt Nombre del Gimnasio-->
          <div class="input-field col s12" hidden>
               <i class="material-icons prefix">mode_edit</i>
              <textarea id="txtIdGimnasioMod" name="txtIdGimnasioMod" class="materialize-textarea" data-length="" ></textarea>
              <label for="textarea2">ID</label>
          </div>
          <div class="input-field col s6">
              <i class="material-icons prefix">mode_edit</i>
              <textarea id="txtagimNombreMod" name="txtagimNombreMod" class="materialize-textarea"></textarea>
              <label for="icon_prefix2">Nombre del gimnasio</label>
          </div>
          
          <!--Txt Dirección del Gimnasio-->
          <div class="input-field col s6">
              <i class="material-icons prefix">fitness_center</i>
                <select name="sltDireccionMod" name="sltDireccionMod">
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
              <select id="sltSedeMod" name="sltSedeMod">
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
                  <input type="file" id="txtimgGimnasioMod" name="txtimgGimnasioMod" multiple>
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
              <textarea id="txtadescripcionGimnasioMod" name="txtadescripcionGimnasioMod" class="materialize-textarea" data-length=""></textarea>
              <label for="textarea2">Descripción</label>
            </div>
          </div>
</form>