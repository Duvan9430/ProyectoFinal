<form id="formularioModificar">
	<div class="row">
    <input type="number" name="txtIdPersonaModal" id="txtIdPersonaModal" hidden="">
    <div class="row">  
      <div class="input-field col s4">
        <i class="material-icons prefix">account_circle</i>
        <input  type="text" class="validate" name="txtPerPrimerNombreModal" id="txtPerPrimerNombreModal">
        <label for="icon_people"></label>
      </div>
      <div class="input-field col s4">
        <i class="material-icons prefix">account_circle</i>
        <input type="text" class="validate" name="txtPerSegundoNombreModal" id="txtPerSegundoNombreModal">
        <label for="last_name"></label>
      </div>
      <div class="input-field col s4">
        <i class="material-icons prefix">account_circle</i>
        <input type="text" class="validate"name="txtPerPrimerApellidoModal" id="txtPerPrimerApellidoModal">
        <label for="last_name"></label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s4">
        <i class="material-icons prefix">account_circle</i>
        <input type="text" class="validate" name="txtPerSegundoApellidoModal" id="txtPerSegundoApellidoModal">
        <label for="last_name"></label>
      </div>
      <div class="input-field col s1">
        <i class="material-icons prefix">folder_shared</i>
      </div>
      <div class="input-field col s3">  
        <select name="txtIdTipoDocumentoModal" id="txtIdTipoDocumentoModal" class="browser-default"></select>
      </div>
      <div class="input-field col s4">
        <i class="material-icons prefix">folder_shared</i>
        <input type="text" class="validate" name="txtPerNitModal" id="txtPerNitModal" >
        <label></label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s4">
        <i class="material-icons prefix">date_range</i>
        <input type="date" class="validate" name="txtPerFechaNacimientoModal" id="txtPerFechaNacimientoModal">
        <label>Fecha Nacimiento</label>
      </div>
      <div class="input-field col s1">
        <i class="material-icons prefix">local_hospital</i>
      </div>
      <div class="input-field col s3">
        <select name="txtIdMunicipioNacimientoModal" class="browser-default" id="txtIdMunicipioNacimientoModal">Municipio Nacimiento</select>
      </div>
      <div class="input-field col s4">
        <i class="material-icons prefix">room</i>
        <input type="text" class="validate" name="txtPerDireccionModal" id="txtPerDireccionModal">
        <label for="last_name"></label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s1">
        <i class="material-icons prefix">domain</i>
      </div>
      <div class="input-field col s3">
        <select name="txtIdMunicipioResidenciaModal" id="txtIdMunicipioResidenciaModal" class="browser-default">Municipio Residencia</select>
      </div>
      <div class="input-field col s1">
        <i class="material-icons prefix">phone</i>
      </div>
      <div class="input-field col s3">
        <select name="txtIdGeneroModal" id="txtIdGeneroModal" class="browser-default">Genero</select>
      </div>
      <div class="input-field col s1">
        <i class="material-icons prefix">local_hospital</i>
        </div>
      <div class="input-field col s3">
        <select name="txtIdEpsModal" id="txtIdEpsModal" class="browser-default"></select>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s4">
        <i class="material-icons prefix">phone</i>
        <input type="number" data-length="10" name="txtPerCelularModal" id="txtPerCelularModal">
        <label></label>
      </div>
      <div class="input-field col s1">
        <i class="material-icons prefix">local_hospital</i>
      </div>
      <div class="input-field col s3">
        <select name="txtIdGrupoSanguineoModal" id="txtIdGrupoSanguineoModal" class="browser-default"> </select>
      </div>
      <div class="input-field col s1">
        <i class="material-icons prefix">local_hospital</i>
      </div>
      <div class="input-field col s3">
        <select name="txtIdRegimenModal" id="txtIdRegimenModal" class="browser-default" ></select>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s4">
        <i class="material-icons prefix">email</i>
        <input  type="email" class="validate" name="txtPerCorreoElectronicoModal" id="txtPerCorreoElectronicoModal">
        <label></label>
      </div>
      <div class="input-field col s1">
        <i class="material-icons prefix">domain</i>
      </div>
      <div class="input-field col s3">
        <select name="txtIdSedeModal" id="txtIdSedeModal" class="browser-default">Sede</select>
      </div>
    </div>
</form>
<script>
    $(document).ready(function(){
      $('select').formSelect();
      });
    $(document).ready(function() {
        $('input#input_text, textarea#textarea2').characterCounter();
      });

    window.addEventListener('load', inicio, false);

      function inicio() {
          document.getElementById('txtPerFotoModal').addEventListener('change', cargar, false);               
      }

      function cargar(ev) {
          var arch=new FileReader();
          arch.addEventListener('load',leer,false);
          arch.readAsDataURL(ev.target.files[0]);
      }
      
      function leer(ev) {
          document.getElementById('imagen').style.backgroundImage="url('" + ev.target.result + "')";
      }


  </script>
  <script type="text/javascript" src="../Js/persona.js"></script>
