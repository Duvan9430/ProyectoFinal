<link rel="stylesheet" type="text/css" href="../css/Rutinas/frmCorreo.css">

<div class="container valign center" id="contenido">
	&nbsp
	<div class="card">
		<div class="card-body">
			<form id="frmEnvioCorreo" enctype="multipart/form-data">
				&nbsp
				<div class="row">
					<h4>Notificaciones</h4>
					<div class="col s2"></div>
					<div class="col s8">			
						<div class="input-field">
							<label for="Asunto">Asunto</label>
							<input type="text" name="Asunto" id="Asunto">
						</div>
					</div>
					<div class="col s2"></div>
				</div>	

				<div class="row">
					<div class="col s2"></div>
					<div class="col s8">			
						<div class="input-field">
							<label for="Descripcion">Descripcion</label>
							<textarea type="text" name="Descripcion" id="Descripcion" class="materialize-textarea"></textarea>
						</div>
					</div>
					<div class="col s2"></div>
				</div>

				<div class="row">
					<div class="col s2"></div>
					<div class="col s8">
						<div class="file-field input-field">
      						<div class="btn">
        						<i class="material-icons">attach_file</i>
        						<input type="file" id="Archivo" name="Archivo[]" multiple>
      						</div>
      						<div class="file-path-wrapper">
        						<input class="file-path" type="text" placeholder="Sube uno o mas archivos" id="Info_Archivo">
      						</div>
    					</div>
					</div>
					<div class="col s2"></div>
				</div>

				<div class="valing-center">
			      	<a class="waves-effect waves-light btn btn-Enviar" name="btnEnviarCorreo" id="btnEnviarCorreo" value="Enviar"><i class="material-icons right icon-black">send</i>Enviar</a>

			      	<div id="Cargando" hidden>
						<div class="preloader-wrapper active">
			    			<div class="spinner-layer spinner-teal darken-3-only">
			      				<div class="circle-clipper left">
			        				<div class="circle"></div>
			      				</div>
			      				<div class="gap-patch">
			        				<div class="circle"></div>
			      				</div>
			      				<div class="circle-clipper right">
			        				<div class="circle"></div>
			    				</div>
			    			</div>
						</div>
					</div>	
			    </div>
				&nbsp
			</form>
		</div>
	</div>
</div>


<script type="text/javascript" src="../js/Rutinas/frmCorreo.js"></script>
