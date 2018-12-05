function modalCreate() {
  $("#formularioCreate").html('');
	$("#formularioCreate").load("Rutinas/musculoCreateFrm.php");
}
function modalModificar() {
	$("#formularioModificar").load("Rutinas/musculoUpdateFrm.php");
}
function modalEliminar() {
	$("#eliminar").load("Rutinas/musculoDeletFrm.php");
}
//Modal eliminar
function cargarModalEliminar(idMusculo) {
	document.getElementById('idMusculoEliminar').value=idMusculo;
}
	//

//
function cargarModalModificar(idMusculo) {
document.getElementById('idMusculo').value=idMusculo;
var idMusculoModificar=idMusculo;
$.ajax({
  url: '../controlador/Rutinas/musculoReadUpdate.php',
  type: 'POST',
  dataType: 'json',
  data: {idMusculo: idMusculo},
})
.done(function(json) {
  console.log("Good");

  $.each(json.arrayMusculoUpdate, function(index, val) {
    document.getElementById('txtMusNombreUpdate').value=val.musNombre;
    $('#sltClasificacionMusculoUpdate option[value='+val.idClasificacionMusculo+']').attr('selected', 'selected');
  });

  //cargarSelectModificar();

  console.log(json);
  console.log("tabla cargada");
})
.fail(function() {
  console.log("error");
});

}
$(document).ready(function(){
  tablaMusculo();
  modalCreate();
  modalModificar();
  modalEliminar();
  $(".modalMediano").modalMediano();
  $(".modal").modal();
  cargarSelect();
  /**
   * Codigo para configurar que al momento de clickear en el btn guardar
   * me guarde el registro en la base de datos.
   */
  $(document).on('click', '#btnGuardar', function() {
    var sltClasificacionMusculo=$('#sltClasificacionMusculo').val();
    if ( sltClasificacionMusculo == 0 || $("#txtMusNombre").val() == "") {
        M.toast({html: "Verifique la información que desea ingresar"})
    }else{
      //alert(sltClasificacionMusculo);
      $.ajax({
        url: '../controlador/Rutinas/musculoCreate.php',
        type: 'POST',
        dataType: 'json',
        data: $("#MusculoFrmCreate").serialize(),
      })
      .done(function(json) {
        M.toast({html: "Musculo registrado"})
        console.log(json.mensaje);
        tablaMusculo();
      })
      .fail(function() {
         M.toast({html: "No se puede registrar, intente mas tarde"})
        console.log("error");
      });
    }
  });

  /*Modificar*/
  $(document).on('click', '#btnModificar', function() {
    //var sltClasificacionMusculo=$('#sltClasificacionMusculo').val();
    if ($("#sltClasificacionMusculoUpdate").val()==0 || $("#txtMusNombreUpdate").val()==0 ) {
        M.toast({html: "Verifique la información que desea ingresar"})
    }else{
      //alert(sltClasificacionMusculo);
      $.ajax({
        url: '../controlador/Rutinas/musculoUpdate.php',
        type: 'POST',
        dataType: 'json',
        data: $("#MusculoFrmUpdate").serialize(),
      })
      .done(function(json) {
        M.toast({html: "Musculo Modificado"})
        console.log(json.mensaje);
        tablaMusculo();
      })
      .fail(function() {
         M.toast({html: "No se puede Modificar, intente mas tarde"})
        console.log("error");
      });
    }
  });
///
/*ELiminar*/
$(document).on('click', '#btnEliminar', function() {
		$.ajax({
			url: '../controlador/Rutinas/musculoDelet.php',
			type: 'POST',
			dataType: 'json',
			data: $("#frmMusculoEliminar").serialize(),
		})
		.done(function(json) {
			M.toast({html: "Musculo Eliminado"})
			console.log(json.mensaje);
			tablaMusculo();
		})
		.fail(function() {
			 M.toast({html: "No se puede Eliminar, intente mas tarde"})
			console.log("error");
		});
});
///

  /**
   * 	Método que carga el select del formulario para crear un musculo
   * @return {[type]} [description]
   */

  function cargarSelect() {
  $.ajax({
    url: '../controlador/Rutinas/musculoClasificacion.php',
    type: 'POST',
    dataType: 'json',
    data: null,
  })
  .done(function(json) {
    var option='';
    option = '<option value="0">--Seleccione--</option>';
    $.each(json.arrayMusculoClasificacion, function(index, val) {
       option += '<option value="'+val.idClasificacionMusculo+'">'+val.clmNombre+'</option>';
    });
    console.log(option);
    $("#sltClasificacionMusculo").html(option);
    $("#sltClasificacionMusculoUpdate").append(option);
    console.log("Select cargado");
  })
  .fail(function() {
    console.log("error");
  });
  }

  function tablaMusculo() {
    $.ajax({
      url: '../controlador/Rutinas/musculoRead.php',
      type: 'POST',
      dataType: 'json',
      data: null,
    })
    .done(function(json) {
      var tabla = '';

      $.each(json.arrayMusculo, function(index, val) {
        tabla += '<tr>';
        tabla +=  '<td>'+val.clmNombre+'</td>';
        tabla +=  '<td>'+val.musNombre+'</td>';
        tabla += 	'<td><a onclick="cargarModalModificar('+val.idMusculo+')" class="waves-light btn modalMediano-trigger" style="background-color:#fc7323 color: black; font-weight: bold" href="#modalEditar"><i class="material-icons">border_color</i></a>&nbsp;';
        tabla +=  '<a onclick="cargarModalEliminar('+val.idMusculo+')" class="waves-light btn modal-trigger" style="background-color:#fc7323 color: black; font-weight: bold" href="#modalEliminar"><i class="material-icons">delete_sweep</i></a></td>';
        tabla += '</tr>';
      });

      $('#tblMusculo').html(tabla);

      console.log(json);
      console.log("tabla cargada");
    })
    .fail(function() {
      console.log("error");
    });
  }

});
function cargarModal(idMusculo) {
    alert(idMusculo);
  }
