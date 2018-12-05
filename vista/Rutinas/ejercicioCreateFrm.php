<form id="frmEjercicio">
  <div class="input-field col s12">
    <!-- <i class="material-icons prefix">directions_bike</i> -->
      <select name="sltTipoEjercicio" id="sltTipoEjercicio" class="browser-default">

      </select>
  </div>
  <br><br><br><br>
  <div class="input-field">
    <!-- <i class="material-icons prefix">mode_edit</i> -->
    <label for="text">Ejercicio</label>
    <input type="text" name="txtEjeNombre" id="txtEjeNombre" required>
  </div>

  <div class="input-field">
    <!-- <i class="material-icons prefix">border_color</i> -->
    <label for="mensaje">Detalles</label>
    <input  type="text" name="txtDetalles"   id="txtDetalles" data-length="150" required>
  </div>

  <div class="file-field input-field  s12">
    <!-- Cargar imagen  -->
    <div class="file-field input-field col s12">
      <div class="btn teal">
        <span>Cargar imagen</span>
        <input type="file" id="files" name="files"/>
      </div>
    </div>
  </div>

</form>
