document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
//Modal
  function cargarModalEliminar(idEjercicioMusculo){
    document.getElementById('IdEliminar').value=idEjercicioMusculo;
  }
  /*Inicio Modal Editar*/
  function cargarModalEditar(idEjercicioMusculo) {
    document.getElementById('idEjercicioMusculo').value=idEjercicioMusculo;
    var idEjercicioMusculoEdit=idEjercicioMusculo;
    $.ajax({
      url: '../controlador/Rutinas/ejercicioMusculoReadUpdate.php',
      type: 'POST',
      dataType: 'json',
      data: 'idEjercicioMusculo='+idEjercicioMusculoEdit,
    })
    .done(function(json) {
     console.log("Good");
  //   alert("hooooo");
     $('#sltEjercicioEditar option[value='+json.arrayEjercicioMusculoMod[0].idEjercicio+']').attr('selected', 'selected');
     $('#sltMusculoModificar option[value='+json.arrayEjercicioMusculoMod[0].idMusculo+']').attr('selected', 'selected');
     document.getElementById('txtEjmDescripcionMod').value=json.arrayEjercicioMusculoMod[0].ejmDescripcion;
    })
    .fail(function() {
      console.log("error");

    });
  }
  /*Fin Modal Editar*/

$(document).ready(function(){
  $(".modalMediano").modalMediano();
  $(".modal").modal();
  modalEditar();
  cargarSelect();
  cargarSelectMusculo();
  form();
  tablaEjercicioMusculo();
  eliminar();
  //cargarSelectEditar();
  function modalEditar() {
    $("#formularioEditar").load( "Rutinas/ejercicioMusculoEditarFrm.php" );
  }
  function eliminar() {
    $("#eliminar").load("Rutinas/ejercicioMusculoDeletFrm.php")
  }
  function cargarSelect() {
  $.ajax({
    url: '../controlador/Rutinas/ejercicioSelect.php',
    type: 'POST',
    dataType: 'json',
    data: null,
  })
  .done(function(json) {
    var option='';
    option = '<option value="0">--Seleccione--</option>';
    $.each(json.arrayEjercicio, function(index, val) {
       option += '<option value="'+val.idEjercicio+'">'+val.ejeNombre+'</option>';
    });
    //console.log(option);
    $("#sltEjercicio").html(option);
    $("#sltEjercicioEditar").html(option);
    console.log("Select cargado");
  })
  .fail(function() {
    console.log("error");
  });

}
function cargarSelectMusculo() {
$.ajax({
  url: '../controlador/Rutinas/consultarMusculo.php',
  type: 'POST',
  dataType: 'json',
  data: null,
})
.done(function(json) {
  var optionM='';
  optionM = '<option value="0">--Seleccione--</option>';
  $.each(json.arrayMusculo, function(index, val) {
     optionM += '<option value="'+val.idMusculo+'">'+val.musNombre+'</option>';
  });
  //console.log(optionM);
  $("#sltMusculoModificar").html(optionM);
  console.log("Select cargado Musculo");
})
.fail(function() {
  console.log("error");
});

}
function form() {
  $.ajax({
		url: '../controlador/Rutinas/consultarMusculo.php',
		type: 'POST',
		dataType: 'json',
		data: null,
	})
	.done(function(json) {
		var lista = '';
		$.each(json.arrayMusculo, function(index, val) {
			 lista +='<br>';
			 lista +='<label>';
			 lista += '<input type="checkbox" class="filled-in" value="'+val.idMusculo+'" name="checkedMusculo[]" id="checkedMusculo"/>';
			 lista += '<span>'+val.musNombre+'</span>';
			 lista +='</label><br>';
       lista +='<label>Imagen</label><br>';
			 lista +='<input type="file" id="imagen" name="imagen[]"><br>';
			 lista +='<div class = "input-field col s12">';
       lista +='<i class = "material-icons prefix">description</i>';
       lista +='<textarea id ="txtEjmDescripcion" name="txtEjmDescripcion[]" class ="materialize-textarea"></textarea>';
       lista +='<label for= "lblEjmDescricion">Descripción</label>';
       lista +='</div><br>';



		});
		$("#musculos").html(lista);
		//console.log(lista);
	})
	.fail(function() {
		console.log("error");
	});
}

/////////////////////////////////
$(document).on('click','#btnGuardarejeM',function(){
  chekMusculo = document.getElementById("checkedMusculo").checkbox; //Array.
  var ejercicio=$('#sltEjercicio').val();
  var formulario = new FormData($('#MusculoEjercicioForm')[0]);


  if(ejercicio==0){
    alert("Debe escoger un ejercicio");
  }else{
    $.ajax({
    url: '../controlador/Rutinas/ejercicioMusculoCreate.php',
    type: 'POST',
    dataType: 'JSON',
    data: formulario,
    cache: false,
    contentType: false,
    processData: false,
    })
    .done(function(json) {
      console.log("success");
      tablaEjercicioMusculo();
    })
    .fail(function(retorno) {
      console.log(retorno);
      tablaEjercicioMusculo();
    });
 }
});
/////////////////////////////////
/**/
/////////////////////////////////
$(document).on('click','#btnGuardarMo',function(){
  var sltEjercicioEditar=$('#sltEjercicioEditar').val();
  var sltMusculoModificar=$('#sltMusculoModificar').val();
  var txtEjmDescripcionMod=$('#txtEjmDescripcionMod').val();
  var formularioUpdate= new FormData($('#editarEjercicioMusculo')[0]);
  if (sltEjercicioEditar==0){
    alert('Campos vacios');
  }
  else if (sltMusculoModificar==0) {
    alert('Campos vacios');
  }
  else if (txtEjmDescripcionMod==""){
    alert('Campos vacios');
  }
  else{
    $.ajax({
    url: '../controlador/Rutinas/ejercicioMusculoUpdate.php',
    type: 'POST',
    dataType: 'JSON',
    data: formularioUpdate,
    cache: false,
    contentType: false,
    processData: false,
    })
    .done(function(json) {
      console.log("success");
      tablaEjercicioMusculo();
    })
    .fail(function() {
      console.log("error");
    });
  }
});

/////////////////////////////////
$(document).on('click','#btnEliminar',function(){
  //var formularioDelet= new FormData($('#eliminarrrr')[0]);
    $.ajax({
    url: '../controlador/Rutinas/ejercicioMusculoDelet.php',
    type: 'POST',
    dataType: 'JSON',
      data: $("#eliminarrrr").serialize(),
    })
    .done(function(json) {
      console.log("success");
      tablaEjercicioMusculo();
    })
    .fail(function() {
      console.log("error");
    });
});

/*Tabla Ejercicio Musculo*/
function tablaEjercicioMusculo(){
  $.ajax({
    url: '../controlador/Rutinas/ejercicioMusculoRead.php',
    type: 'POST',
    dataType: 'json',
    data: null,
  })
  .done(function(json) {
    var tabla = '';

    $.each(json.arrayEjercicioMusculo, function(index, val) {
      tabla += '<tr>';
      tabla += 	'<td>'+val.ejeNombre+'</td>';
      tabla += 	'<td>'+val.musNombre+'</td>';
      tabla += 	'<td>'+val.ejmDescripcion+'</td>';
      tabla += 	'<td><img width=80px, height=50px, src="../img/Rutinas/Ejercicios/'+val.ejmFoto+'"></td>';
      tabla += 	'<td><a onclick="cargarModalEditar('+val.idEjercicioMusculo+')" class="waves-light btn modalMediano-trigger" name="btnAgMusculos" id="btnAgMusculos" style="background-color:#fc7323 color: black; font-weight: bold" href="#modalEditar"><i class="material-icons">border_color</i></a>';
      tabla +=  '&nbsp;<a onclick="cargarModalEliminar('+val.idEjercicioMusculo+')" class="waves-light btn modal-trigger" name="btnElim" id="btnElim" style="background-color:#fc7323 color: black; font-weight: bold" href="#modalEliminar"><i class="material-icons">delete_sweep</i></a>';
      tabla +=  '</td>';
      tabla += '</tr>';
    });

    $('#tblEjercicioMusculo').html(tabla);

    console.log(json);
    console.log("tabla cargada");
  })
  .fail(function() {
    console.log("error");
  });

}
/*Fin Tabla*/
});
