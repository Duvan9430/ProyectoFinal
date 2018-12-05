  $(function() {
      M.AutoInit();
    });
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems, options);
      });
    // Or with jQuery
    $(document).ready(function(){
        $('.modal').modal();
  });
function cargarModal(idTorneo) {
  document.getElementById("txtIdTorneoModal").value = idTorneo;
}
function cargarModalEliminar(idTorneo) {
  document.getElementById("txtIdTorneoModal").value = idTorneo;
}
$(document).ready(function() {
  //$('#contenido').load('../vista/frmCrearTorneo.php');

  $(document).on("click","#btnCrearLugar", function(){
    if($('#txtNombreLugar').val() != "" && $('#txtDireccionLugar').val() != "" && $('#sltMunicipio').val().trim() !=""){
      $.ajax({
        url: '../controlador/Eventos/lugarCreate.php',
        type: 'POST',
        dataType: 'json',
        data: $('#frmCrearLugar').serialize(),
        })
        .done(function() {
          M.toast({html: 'Lugar Creado!'})
          readLugar();
          $('#txtNombreLugar').val('');
          $('#txtDireccionLugar').val('');
          $('#sltMunicipio').val('');
          $('#modalCrearLugar').modal('close');
        })
        .fail(function() {
          console.log("error");
        }) 
    }else{
      M.toast({html: 'Campos Vacios!'})
    }
  });

  $(document).on("click","#btnCrearTorneo", function(){
    if ($('#txtNombreTorneo').val() !="" && $('#txtFechaInicio').val() != "" 
      && $('#txtFechaFin').val() != "" && $('#sltLugar').val().trim() != "" 
      && $('#sltDisciplina').val().trim() != "" && $('#sltTipoEliminatoria').val().trim() != "" 
      && $('#sltGeneroTorneo').val().trim() !="" && $('#sltClasificacionTorneo').val().trim() !="" 
      && $('#txtNumeroEquipos').val().trim() !="" ){ 
        $.ajax({
        url: '../controlador/Eventos/torneoCreate.php',
        type: 'POST',
        dataType: 'json',
        data: $('#frmCrearTorneo').serialize(),
        })
        .done(function() {
          M.toast({html: 'Registro Exitoso!'})
          readTorneos();
          $('#txtNombreTorneo').val('');
          $('#txtFechaInicio').val('');
          $('#txtFechaFin').val('');
          $('#sltLugar').val('');
          $('#sltDisciplina').val('');
          $('#sltTipoEliminatoria').val('');
          $('#sltGeneroTorneo').val('');
          $('#sltClasificacionTorneo').val('');
          $('#txtNumeroEquipos').val('');

        })
        .fail(function() {
          console.log("error");
        })
    }else{
      M.toast({html: 'Campos Vacios!'})
    } 
  });

  function readDepartamento() {
    $.ajax({
      url: '../controlador/Eventos/departamentoRead.php',
      type: 'POST',
      dataType: 'json',
      data: null,
    })
    .done(function(json) {
      var option = null;
      option = '<option value="" disabled selected>Seleccione el Departamento</option>';
      $.each(json.departamento ,function(index, val) {
        option += '<option value='+val.idDepartamento+'>'+val.depNombre+'</option>';
      });
      $('#sltDepartamento').html(option);
    })
    .fail(function() {
      console.log("error");
    })
  };

  readDepartamento();

  $('#sltDepartamento').on('change',function(){
    var valorDepartamento = $(this).val();
    document.getElementById("departamentoId").value = valorDepartamento;
    readMunicipio();
  });

  function readMunicipio() {    
    $.ajax({
      url: '../controlador/Eventos/municipioRead.php',
      type: 'POST',
      dataType: 'json',
      data: {idDepartamento: $('#departamentoId').val()},
    })
    .done(function(json) {
      var option = null;
      option = '<option value="" disabled selected>Seleccione el Municipio</option>';
      $.each(json.arrayMunicipio ,function(index, val) {
        option += '<option value='+val.idMunicipio+'>'+val.munNombre+'</option>';
      });
      $('#sltMunicipio').html(option);
    })
    .fail(function() {
      console.log("error");
    })
  };

  function readClasificacionTorneo() {
    $.ajax({
      url: '../controlador/Eventos/clasificacionTorneoRead.php',
      type: 'POST',
      dataType: 'json',
      data: null,
    })
    .done(function(json) {
      var option = null;
      option = '<option value="" disabled selected>Seleccione la Clasificacion</option>';
      $.each(json.arrayClasificacionTorneo ,function(index, val) {
        option += '<option value='+val.idClasificacionTorneo+'>'+val.claNombre+'</option>';
      });
      $('#sltClasificacionTorneo').html(option);
      $('#sltClasificacionTorneoModal').html(option);
    })
    .fail(function() {
      console.log("error");
    })
  };

  readClasificacionTorneo();

  function readDisciplina() {
    $.ajax({
      url: '../controlador/Eventos/disciplinaRead.php',
      type: 'POST',
      dataType: 'json',
      data: null,
    })
    .done(function(json) {
      var option = null;
      option = '<option value="" disabled selected>Seleccione la disciplina</option>';
      $.each(json.arrayDisciplina ,function(index, val) {
        option += '<option value='+val.idDisciplina+'>'+val.disNombre+'</option>';
      });
      $('#sltDisciplina').html(option);
      $('#sltDisciplinaModal').html(option);

    })
    .fail(function() {
      console.log("error");
    })
  };

  readDisciplina();

  function readGeneroTorneo() {
    $.ajax({
      url: '../controlador/Eventos/generoTorneoRead.php',
      type: 'POST',
      dataType: 'json',
      data: null,
    })
    .done(function(json) {
      var option = null;
      option = '<option value="" disabled selected>Seleccione el Genero</option>';
      $.each(json.arrayGeneroTorneo ,function(index, val) {
        option += '<option value='+val.idGeneroTorneo+'>'+val.getNombre+'</option>';
      });
      $('#sltGeneroTorneo').html(option);
      $('#sltGeneroTorneoModal').html(option);

    })
    .fail(function() {
      console.log("error");
    })
  };

  readGeneroTorneo()

  function readLugar() {
    $.ajax({
      url: '../controlador/Eventos/lugarRead.php',
      type: 'POST',
      dataType: 'json',
      data: null,
    })
    .done(function(json) {
      var option = null;
      option = '<option value="" disabled selected>Seleccione el Lugar</option>';
      $.each(json.arrayLugar ,function(index, val) {
        option += '<option value='+val.idLugar+'>'+val.lugNombre+'</option>';
      });
      $('#sltLugar').html(option);
      $('#sltLugarModal').html(option);

    })
    .fail(function() {
      console.log("error");
    })
  };

  readLugar();

  function readTipoEliminatoria() {
    $.ajax({
      url: '../controlador/Eventos/tipoEliminatoriaRead.php',
      type: 'POST',
      dataType: 'json',
      data: null,
    })
    .done(function(json) {
      var option = null;
      option = '<option value="" disabled selected>Seleccione el Tipo de Eliminatoria</option>';
      $.each(json.arrayTipoEliminatoria ,function(index, val) {
        option += '<option value='+val.idTipoEliminatoria+'>'+val.tieNombre+'</option>';
      });
      $('#sltTipoEliminatoria').html(option);
      $('#sltTipoEliminatoriaModal').html(option);
    })
    .fail(function() {
      console.log("error");
    })
  };

  readTipoEliminatoria();

  function readTorneos() {
    $.ajax({
      url: '../controlador/Eventos/torneoRead.php',
      type: 'POST',
      dataType: 'json',
      data: null,
    })
    .done(function(json) {
      var table;
      $.each(json.arrayTorneo, function(index, val) {
        table += '<tr>';
        table += '<td>'+val.torNombre+'</td>';
        table += '<td>'+val.torFechaInicio+'</td>';
        table += '<td>'+val.torFechaFin+'</td>';
        table += '<td>'+val.torNumeroEquipos+'</td>';
        table += '<td>'+val.disNombre+'</td>';
        table += '<td>'+val.tieNombre+'</td>';
        table +='<td><a href="#modal1" onclick="cargarModal('+val.idTorneo+')" class="waves-effect waves-light btn modalGrande-trigger data-toggle="modal"  id="btnCargarModal" style="background-color: #fc7323;"><i class="material-icons right icon-black">edit</i></a>';
        table +='&nbsp<a href="#modalEliminar" onclick="cargarModalEliminar('+val.idTorneo+')" class="btn modal-trigger" class="waves-effect waves-light btn" data-toggle="modal"  id="btnCargarModalEliminar" style="background-color: #fc7323;"><i class="material-icons right icon-black">delete</i></a></td>';
        table += '</tr>';
      });
      $('#bodyTorneo').html(table);
    })
    .fail(function() {
      console.log("error");
    })  
  }

  readTorneos();

  $(document).on('click', '#btnCargarModal', function() {
    $.ajax({
      url: '../controlador/Eventos/torneoReadModal.php',
      type: 'POST',
      dataType: 'json',
      data: {idTorneo: $('#txtIdTorneoModal').val()},
    })
    .done(function(json) {
      document.getElementById('txtNombreTorneoModal').value=json.torneo[0].torNombre;
      document.getElementById('sltClasificacionTorneoModal').value=json.torneo[0].idClasificacionTorneo;
      document.getElementById('sltGeneroTorneoModal').value=json.torneo[0].idGeneroTorneo;
      document.getElementById('sltDisciplinaModal').value=json.torneo[0].idDisciplina;
      document.getElementById('sltLugarModal').value=json.torneo[0].idLugar;
      document.getElementById('sltTipoEliminatoriaModal').value=json.torneo[0].idTipoEliminatoria;
      document.getElementById('txtFechaInicioModal').value=json.torneo[0].torFechaInicio;
      document.getElementById('txtFechaFinModal').value=json.torneo[0].torFechaFin;
      document.getElementById('txtNumeroEquiposModal').value=json.torneo[0].torNumeroEquipos;
    })
    .fail(function() {
      console.log("error");
    })
  });

  $(document).on("click","#btnModificar",function() {
    $.ajax({
      url: '../controlador/Eventos/torneoUpdate.php',
      type: 'POST',
      dataType: 'json',
      data: $('#frmModificarTorneo').serialize(),
    })
    .done(function(json) {
      M.toast({html: 'Torneo Modificado!'})
      readTorneos();
      $('#modal1').modal('close');
    })
    .fail(function() {
      console.log("error");
    })
  });

  $(document).on("click","#btnEliminar",function() {
    $.ajax({
      url: '../controlador/Eventos/torneoDelete.php',
      type: 'POST',
      dataType: 'json',
      data: $('#frmModificarTorneo').serialize(),
    })
    .done(function(json) {
      M.toast({html: 'TorneoEliminado!'})
      readTorneos();
      $('#modalEliminar').modal('close');
    })
    .fail(function() {
      console.log("error");
    })
  });
});