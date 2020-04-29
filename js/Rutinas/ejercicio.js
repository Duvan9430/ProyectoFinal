function modalCreate() {
	$("#formularioCreate").load("Rutinas/ejercicioCreateFrm.php");
}
function modalModificar() {
	$("#formularioModificar").load("Rutinas/ejercicioModificarFrm.php");
}
function modalEliminar() {
	$("#eliminar").load("Rutinas/ejercicioEliminarFrm.php");
}
	var tipoejercicioModificar="";
	///Cargar Select Modificar
	function cargarSelectModificar() {
		$.ajax({
			url: '../controlador/Rutinas/selectFrmEjercicio.php',
			type: 'POST',
			dataType: 'json',
			data: null,
		})
		.done(function(json) {

			//tipoejercicio += '<option value="0">Seleccione</option>';
			$.each(json.arrayTipoEjercicio, function(index, val) {
				tipoejercicioModificar += '<option value="'+val.idTipoEjercicio+'">'+val.tieNombre+'</option>';
			});
			$("#sltTipoEjercicioModificar").append(tipoejercicioModificar);
			//console.log(json.arrayTipoEjercicio);
			console.log("loaded select");
		})
		.fail(function() {
			console.log("error loaded select");
		});
	}

//Modal eliminar
function cargarModalEliminar(idEjercicio) {
	document.getElementById('idEjercicioEliminar').value=idEjercicio;
}
	//
function cargarModalModificar(idEjercicio) {
	document.getElementById('idEjercicio').value=idEjercicio;
	var idEjerMod=idEjercicio;
	$.ajax({
		url: '../controlador/Rutinas/ejercicioReadUpdate.php',
		type: 'POST',
		dataType: 'json',
		data: 'idEjercicio='+idEjerMod,
	})
	.done(function(json) {
		console.log("Good");

		document.getElementById('txtEjeNombreModificar').value=json.arrayEjercicioMod[0].ejeNombre;
		document.getElementById('txtDetallesModificar').value=json.arrayEjercicioMod[0].ejeDetalles;
		tipoejercicioModificar ='<option value="'+json.arrayEjercicioMod[0].idTipoEjercicio+'">'+json.arrayEjercicioMod[0].tieNombre+'</option>';

		cargarSelectModificar();

		console.log(json);
		console.log("tabla cargada");
	})
	.fail(function() {
		console.log("error");
	});

}
$(document).ready(function() {
	cargarSelect();
	tablaEjercicio();
	modalCreate();
	modalModificar();
	modalEliminar();
	$(".modal").modal();
	$(".modalMediano").modalMediano();

	$(document).on('click', '#btnGuardar', function() {
		var sltTipoEjercicio=$('#sltTipoEjercicio').val();
		var txtEjeNombre=$('#txtEjeNombre').val();
		var txtDetalles=$('#txtDetalles').val();
		var files=$('#files').val();
		var form = new FormData($('#frmEjercicio')[0]);
		//alert("--->"+sltTipoEjercicio+"---Nombre: "+txtEjeNombre+"--->"+txtDetalles+"--->"+files);
		if(sltTipoEjercicio && txtEjeNombre &&  txtDetalles && files){
			$.ajax({
				url: '../controlador/Rutinas/ejercicioCreate.php',
				type: 'POST',
				dataType: 'json',
				data: form,
				cache: false,
				contentType: false,
				processData: false,
			})
			.done(function(json) {
				M.toast({html: "Ejercicio registrado"})
				tablaEjercicio();
				console.log("Guardado");
			})
			.fail(function() {
				console.log("error");
			});
		}
		else{
			M.toast({html: "Campos Vacíos"});
		}

	});
	//Editar Ejercicio
	$(document).on('click', '#btnModificar', function() {
		var sltTipoEjercicioModificar=$('#sltTipoEjercicioModificar').val();
		var txtEjeNombreModificar=$('#txtEjeNombreModificar').val();
		var txtDetallesModificar=$('#txtDetallesModificar').val();
		var form = new FormData($('#frmEjercicioModificar')[0]);

		if(sltTipoEjercicioModificar && txtEjeNombreModificar &&  txtDetallesModificar){
			$.ajax({
				url: '../controlador/Rutinas/ejercicioUpdate.php',
				type: 'POST',
				dataType: 'json',
				data: form,
				cache: false,
				contentType: false,
				processData: false,
			})
			.done(function(json) {
				M.toast({html: "Ejercicio Editado"})
				tablaEjercicio();
			})
			.fail(function() {
				console.log("error");
				M.toast({html: "Ejercicio No Editado"})
			});
		}
		else{
			M.toast({html: "Campos Vacíos"});
		}

	});
	//Fin Edit
	//Delet Ejercicio
	$(document).on('click', '#btnEliminar', function() {
		var formEliminar= new FormData($('#frmEjercicioEliminar')[0]);

			$.ajax({
				url: '../controlador/Rutinas/ejercicioEliminar.php',
				type: 'POST',
				dataType: 'json',
				data: formEliminar,
				cache: false,
				contentType: false,
				processData: false,
			})
			.done(function(json) {
				M.toast({html: "Ejercicio Eliminado"})
				tablaEjercicio();
			})
			.fail(function() {
				console.log("error");
				M.toast({html: "Ejercicio No Eliminado"})
			});

	});


	//Fin Delet
	function cargarSelect() {
		$.ajax({
			url: '../controlador/Rutinas/selectFrmEjercicio.php',
			type: 'POST',
			dataType: 'json',
			data: null,
		})
		.done(function(json) {
			var tipoejercicio="";
			tipoejercicio += '<option value="0">Seleccione</option>';
			$.each(json.arrayTipoEjercicio, function(index, val) {
				tipoejercicio += '<option value="'+val.idTipoEjercicio+'">'+val.tieNombre+'</option>';
			});
			$("#sltTipoEjercicio").append(tipoejercicio);
			//console.log(json.arrayTipoEjercicio);
			console.log("loaded select");
		})
		.fail(function() {
			console.log("error loaded select");
		});
	}


	function tablaEjercicio() {
		$.ajax({
			url: '../controlador/Rutinas/ejercicioRead.php',
			type: 'POST',
			dataType: 'json',
			data: null,
		})
		.done(function(json) {
			var tabla = '';

			$.each(json.arrayEjercicio, function(index, val) {
				tabla += '<tr>';
				tabla += 	'<td>'+val.tieNombre+'</td>';
				tabla += 	'<td>'+val.ejeNombre+'</td>';
				tabla += 	'<td>'+val.ejeDetalles+'</td>';
				tabla += 	'<td><img width=80px, height=50px, src="../img/Rutinas/Ejercicios/'+val.ejeImagen+'"></td>';
				tabla += 	'<td><a onclick="cargarModalModificar('+val.idEjercicio+')" class="waves-light btn modalMediano-trigger" style="background-color:#fc7323 color: black; font-weight: bold" href="#modalEditar"><i class="material-icons">border_color</i></a>&nbsp;';
				tabla +=  '<a onclick="cargarModalEliminar('+val.idEjercicio+')" class="waves-light btn modal-trigger" style="background-color:#fc7323 color: black; font-weight: bold" href="#modalEliminar"><i class="material-icons">delete_sweep</i></a></td>';
				tabla += '</tr>';
			});

			$('#tblEjercicios').html(tabla);

			console.log(json);
			console.log("tabla cargada");
		})
		.fail(function() {
			console.log("error");
		});

	}

	

});
