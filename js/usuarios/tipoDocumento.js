function cargarModal(idTipoDocumento){
	document.getElementById('txtIdTipoIdentidad').value=idTipoDocumento;
	var TipoDocumento=idTipoDocumento;
	$.ajax({
		url: '../controlador/usuarios/tipoDocumentoReadX.php',
		type: 'POST',
		dataType: 'JSON',
		data: 'idTipoIdentificacion='+TipoDocumento,
	})
	.done(function(json) {
		console.log("success");
		document.getElementById('tidNombreMod').value=json.arrayXTipoDocumento[0].tidNombre;
		document.getElementById('tidAbreviacionMod').value=json.arrayXTipoDocumento[0].tidAbreviacion;
	})
	.fail(function() {
		console.log("error");
	});
	
}

function cargarModalEliminar(idTipoDocumento){
	document.getElementById('idTipoIdentidadModal').value=idTipoDocumento;
}


$(document).ready(function(){
	function ModalModificarrr() {
      $('#Modificar').load('../vista/usuarios/tipoDocumentoUpdateFrm.php')
	}
	function ModalEliminarrr() {
	  $('#Eliminar').load('../vista/usuarios/tipoDocumentoDeleteFrm.php')  
	}
	ModalModificarrr();
 
	ModalEliminarrr();



	$(document).on('click','#btnGuardar', function() {
		var nombre_tipo_documento=$('#tidNombre').val();
		var abreviacion_documento=$('#tidAbreviacion').val();
		console.log(nombre_tipo_documento);
		console.log(abreviacion_documento);
		
		if(nombre_tipo_documento && abreviacion_documento ){
				$.ajax({
				url: '../controlador/usuarios/tipoDocumentoCreate.php',
				type: 'POST',
				dataType: 'JSON',
				data: $('#tipoDocumentoFrm').serialize(),
			})
			.done(function(json) {


				console.log("success");
				//alert('correcto');
				document.getElementById('tidNombre').value = '';
				document.getElementById('tidAbreviacion').value = '';
				tablaTipoDocumento();
			

			})

			.fail(function() {
				console.log("error");
				
			});
		}
		else{
		  	alert("campo vacío");
		}
	})


//consultar tipo documento
function tablaTipoDocumento() {
		$.ajax({
			url: '../controlador/usuarios/tipoDocumentoRead.php',
			type: 'POST',
			dataType: 'json',
			data: null,
		})
		.done(function(json) {
			console.log("success");
			var tabla = '';

			$.each(json.arrayTipoDocumento, function(index, val) {
				tabla += '<tr>';
				tabla += 	'<td>'+val.tidNombre+'</td>';
				tabla += 	'<td>'+val.tidAbreviacion+'</td>';
				tabla += 	'<td><a onclick="cargarModal('+val.idTipoDocumento+')"class="waves-light btn modalMediano-trigger"  style="background-color:#fc7323 color: black; font-weight: bold" href="#modalModificar"><i class="material-icons">border_color</i></a>';
				tabla += 	'&nbsp<a onclick="cargarModalEliminar('+val.idTipoDocumento+')"class="waves-light btn modalMediano-trigger"  style="background-color:#fc7323 color: black; font-weight: bold" href="#modalEliminar"><i class="material-icons">delete</i></a></td>';
				tabla += '</tr>';
			});


			$('#tDocumento').html(tabla);
			
		})
		.fail(function() {
			console.log("Error");
		});			
	}
	//boton Modificar
	$(document).on("click","#btnModificar",function(){
		$.ajax({
			url: '../controlador/usuarios/tipoDocumentoUpdate.php',
			type: 'POST',
			dataType: 'JSON',
			data: $('#tipoDocumentoModificarFrm').serialize(),
		})
		.done(function(json) {
			console.log(json.exito);
			tablaTipoDocumento();
			console.log("success");
			
		})
		.fail(function() {
			console.log("error");
			tablaTipoDocumento();
		});
	})

	$(document).on("click","#btnEliminar",function(){
		$.ajax({
			url: '../controlador/usuarios/tipoDocumentoDelete.php',
			type: 'POST',
			dataType: 'JSON',
			data: $('#tipoDocumentoDeleteFrm').serialize(),
		})
		.done(function(json) {
			console.log(json.exito);
			alert('eliminar');
			tablaTipoDocumento();
			console.log("success");
			
		})
		.fail(function() {
			console.log("error");
			tablaTipoDocumento();
		});
	})


tablaTipoDocumento();
});










