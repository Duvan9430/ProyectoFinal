 <form id="crearMaquinaFrm" method="POST">
					          <div class="row">
					          <!--Txt Nombre-->
					          <div class="input-field col s6">
					              <i class="material-icons prefix">mode_edit</i>
					              <textarea id="txtmaqNombre" name="txtmaqNombre" class="materialize-textarea" required=""></textarea>
					              <label for="icon_prefix2">Nombre Maquina</label>
					          </div>
					          <!--Cargar imagenes-->
					            <div class="file-field input-field col s6">
					                <div class="btn teal darken-3">
					                  <span>Imagen</span>
					                  <input type="file" id="txtmaqImagen " name="txtmaqImagen" multiple>
					                </div>
					                <div class="file-path-wrapper">
					                  <input class="file-path validate"  type="text" placeholder="Seleccione El Archivo Correspondiente" required>
					                </div>
					            </div>
					          </div>
					          <div class="row">
					          <!--Txt codigo maquina-->
					          <div class="input-field col s6">
					              <i class="material-icons prefix">mode_edit</i>
					              <textarea id="txtmaqCodigo" name="txtmaqCodigo" class="materialize-textarea" required></textarea>
					              <label for="icon_prefix2">Codigo Maquina</label>
					         

								
							  </div>					       
					<div class="row">
						<div class="input-field col s12">
  						<i class="material-icons prefix">border_color</i>
	                    <textarea id="txtmaqDescripcion" name="txtmaqDescripcion" class="materialize-textarea" required></textarea>
	                    <label for="textarea1" class='active'>Descripción Máquina:</label>
                     </div>

                     <div class="input-field col s12">
  						<i class="material-icons prefix">border_color</i>
	                    <textarea id="txtmaqObservacion" name="txtmaqObservacion" class="materialize-textarea" required></textarea>
	                    <label for="textarea1" class='active'>Observacion Máquina:</label>
                     </div>
					</div>
                     <br>
                     <br>

                    

				      <center> <a type="button" class="modalGrande-close waves-effect waves-green btn-flat btn btn-default" id="btnCrearMaq" name="btnCrearMaq">Guardar</a>

                     <a  style="background-color:#fc7323;" class="modalGrande-close waves-effect waves-orange btn-flat" type="button"> Salir</a></center>
				</form>