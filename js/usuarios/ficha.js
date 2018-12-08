function cargarModal(idFicha){
	document.getElementById('txtIdFicha').value=idFicha;
	var Ficha=idFicha;
	$.ajax({
		url: '../controlador/usuarios/fichaReadX.php',
		type: 'POST',
		dataType: 'JSON',
		data: 'idFicha='+Ficha,
	})
	.done(function(json) {
		console.log("success");
		document.getElementById('ficNombreMod').value=json.arrayXFicha[0].ficNombre;
		document.getElementById('ficNumeroMod').value=json.arrayXFicha[0].ficNumero;
	})
	.fail(function() {
		console.log("error");
	});
	
}
function cargarModalEliminar(idFicha){
	document.getElementById('idFichaModal').value=idFicha;
}

$(document).ready(function(){
	function ModalModificarrr() {
      $('#Modificar').load('../vista/usuarios/fichaUpdateFrm.php')
	}


	function ModalEliminarrr() {
	  $('#Eliminar').load('../vista/usuarios/fichaDeleteFrm.php')  
	}





	ModalModificarrr();
	ModalEliminarrr();
$(document).on('click','#btnGuardar', function() {
		var nombre_ficha=$('#ficNombre').val();
		var numero_ficha=$('#ficNumero').val();
		if(nombre_ficha.val != "" && numero_ficha != "" ){
				$.ajax({
				url: '../controlador/usuarios/fichaCreate.php',
				type: 'POST',
				dataType: 'JSON',
				data: $('#fichaFrm').serialize(),
			})
			.done(function(json) {


				console.log("success");
				//alert('correcto');
				document.getElementById('ficNombre').value = '';
				document.getElementById('ficNumero').value = '';
				tablaFicha();
			

			})

			.fail(function(retorno) {
				console.log(retorno);
				
			});
		}
		else{
		  	alert("campo vacío");
		}
	})



		//consultar tipo documento
function tablaFicha() {
		$.ajax({
			url: '../controlador/usuarios/fichaRead.php',
			type: 'POST',
			dataType: 'json',
			data: null,
		})
		.done(function(json) {
			console.log("success");
			var tabla = '';

			$.each(json.arrayFicha, function(index, val) {
				tabla += '<tr>';
				tabla += 	'<td>'+val.ficNombre+'</td>';
				tabla += 	'<td>'+val.ficNumero+'</td>';
				tabla += 	'<td><a onclick="cargarModal('+val.idFicha+')"class="waves-light btn-small modalMediano-trigger"  style="background-color:#fc7323 color: black; font-weight: bold" href="#modalModificar"><i class="material-icons">border_color</i></a>';
				tabla += 	'&nbsp<a onclick="cargarModalEliminar('+val.idFicha+')"class="waves-light btn-small modalMediano-trigger"  style="background-color:#fc7323 color: black; font-weight: bold" href="#modalEliminar"><i class="material-icons">delete</i></a></td>'
				tabla += '</tr>';
			});


			$('#tFicha').html(tabla);
		})
		.fail(function(retorno) {
			console.log(retorno);

		});		
	}	
	//
	//boton Modificar
	$(document).on("click","#btnModificar",function(){
		$.ajax({
			url: '../controlador/usuarios/fichaUpdate.php',
			type: 'POST',
			dataType: 'JSON',
			data: $('#fichaModificarFrm').serialize(),
		})
		.done(function(json) {
			console.log(json.exito);
			tablaFicha();
			console.log("success");
			
		})
		.fail(function() {
			console.log("error");
			tablaFicha();
		});
	})


	$(document).on("click","#btnEliminar",function(){
		$.ajax({
			url: '../controlador/usuarios/fichaDelete.php',
			type: 'POST',
			dataType: 'JSON',
			data: $('#FichaDelete').serialize(),
		})
		.done(function(json) {
			console.log(json.exito);
			alert('eliminar');
			tablaFicha();
			console.log("success");
			
		})
		.fail(function() {
			console.log("error");
			tablaFicha();
		});
	})

	tablaFicha();

});
