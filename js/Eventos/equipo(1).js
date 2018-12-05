$(function() {
     M.AutoInit();
   });
   document.addEventListener('DOMContentLoaded', function() {
       var elems = document.querySelectorAll('.modal');
       var instances = M.Modal.init(elems);
     });
   // Or with jQuery
   $(document).ready(function(){
       $('.modal').modal();
 });
 function cargarModal(idEquipo) {
  document.getElementById("txtIdEsquipo").value = idEquipo;
}
function cargarModalEliminar(idEquipo) {
  document.getElementById("txtIdEsquipo").value = idEquipo;
}
$(document).ready(function(){
	function consultarEquipo() {
		$.ajax({
			url: '../../controlador/eventos/equipo.consultar.php',
			type: 'POST',
			dataType: 'json',
			data: null,
		})
		.done(function(json) {
			console.log("success");
			var option = null;
			option = '<option value="" disabled selected>Seleccione el Torneo</option>';
			$.each(json.arrayTorneo,function(index, val) {
				option += '<option value='+val.idTorneo+'>'+val.torNombre+'</option>';
			});
			$('#sltTorneo').html(option);
			$('#slttorneo').html(option);
		})
		.fail(function() {
			console.log("error");
		});	
	}
	consultarEquipo();
	function consultartablaEquipo(){
		$.ajax({
			url:'../../controlador/eventos/consultarEquipo.php',
			type: 'POST',
			dataType: 'json',
			data: null,
		})
		.done(function(json) {
			console.log("success");
			
			var tabla;

			$.each(json.arrayEquipo, function(index, val) {
				tabla += '<tr>';
				tabla += '<td> '+ val.torNombre +' </td>';
				tabla += '<td> '+ val.equNombre +' </td>';
				tabla +='<td><a href="#modalModificar" onclick="cargarModal('+val.idEquipo+')"  class="btn modal-trigger" class="waves-effect waves-light btn" data-toggle="modal"  id="btnCargarModal" style="background-color: #fc7323;"><i class="material-icons right icon-black">edit</i></a>';
       			tabla +='&nbsp<a href="#modalEliminar" onclick="cargarModalEliminar('+val.idEquipo+')" class="btn modal-trigger" class="waves-effect waves-light btn" data-toggle="modal"  id="btnCargarModalEliminar" style="background-color: #fc7323;"><i class="material-icons right icon-black">delete</i></a></td>';
				tabla += '</tr>';
			});
			$('#bodyEquipo').html(tabla);	
		})
		.fail(function() {
			console.log("error");
		})	
	}
	consultartablaEquipo();

	$(document).on('click','#btnCrear',function(){
		var indice= document.getElementById("sltTorneo").selectedIndex;
		console.log(indice);
		if(indice == "" || indice == 0 || $('#txtNombreEquipo').val() == ""){
			if(indice == "" || indice == 0 ){
				M.toast({html: 'Seleccione Torneo'});
			}
			if ($('#txtNombreEquipo').val() == ""){
				M.toast({html: 'Campo Vacío!'});
			}
		}else{
			$.ajax({
			url: '../../controlador/eventos/equipo.crear.php',
			type: 'POST',
			dataType: 'JSON',
			data: $('#equipoFrm').serialize(),
			})
			.done(function(json) {
			
			M.toast({html: 'Registro Exitoso'});
			consultartablaEquipo();
			console.log("success");
			$('#sltTorneo').val('');
       		$('#txtNombreEquipo').val('');
			})
			.fail(function() {
			console.log("error");
			})	
		}	
})
$(document).on('click', '#btnCargarModal', function() {
    $.ajax({
      url: '../../controlador/eventos/equipoReadModal.php',
      type: 'POST',
      dataType: 'json',
      data: {idEquipo: $('#txtIdEsquipo').val()},
    })
    .done(function(json) {
     	document.getElementById('slttorneo').value=json.equipo[0].idTorneo;
      	document.getElementById('txtNombreequipo').value=json.equipo[0].equNombre;    
	})
   .fail(function() {
      console.log("error");
    })
});
 $(document).on("click","#btnModificar",function() {
    $.ajax({
      url: '../../controlador/eventos/equipoUpdate.php',
      type: 'POST',
      dataType: 'json',
      data: $('#frmModificarEquipo').serialize(),
      
    })
    .done(function(json) {
      M.toast({html: 'Torneo Modificado!'})
      consultartablaEquipo();
      $('#slttorneo').val('');
      $('#txtNombreequipo').val('');
      $('#modalModificar').modal('close');
    })
    .fail(function() {
      console.log("error");
    })
  });
  $(document).on("click","#btnEliminar",function() {
    $.ajax({
      url: '../../controlador/eventos/equipoDelete.php',
      type: 'POST',
      dataType: 'json',
      data: $('#frmModificarEquipo').serialize(),
    })
    .done(function(json) {
      M.toast({html: 'Equipo Eliminado!'})
     consultartablaEquipo();
      $('#modalEliminar').modal('close');
    })
    .fail(function() {
      console.log("error");
    })
  });

});

