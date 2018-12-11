var tablaRutina = "";
var option = "";
jQuery(document).ready(function() {
	ReadRutina();
	ReadClasificacionCreate();
	
	M.AutoInit();
	//$('.modal').modal();
	$(document).on('click', '#updateRutina', function() {
		ReadClasificacionUpdate();
	});
	$(document).on('click', '#guardarRutina', function() {		
		if(($('#rutNombre').val() == '') || document.getElementById('idClasificacionRutina').value == 0){
			M.toast({
				html: 'Por favor ingresar todos los campos solicitados.'
			});
			$('#rutNombre').css('borderColor', '#ff7043');
			$('#idClasificacionRutina').css('borderColor', '#ff7043');
		}else{
			
			$.ajax({
				url: '../controlador/Rutinas/CreateRutina.php',
				type: 'POST',
				dataType: 'JSON',
				data: $('#frmCreateRutina').serialize(),
			})
			.done(function(json) {
				ReadRutina();
				M.toast({html: json.mensaje});
			})
			.fail(function(json) {
				console.log(json);
			})
		}
	});
	$(document).on('click', '#actualizarRutina', function() {
		
		$.ajax({
			url: '../controlador/Rutinas/UpdateRutina.php',
			type: 'POST',
			dataType: 'JSON',
			data: $('#frmUpdateRutina').serialize(),
		})
		.done(function(json) {
			ReadRutina();
		})
		.fail(function(json) {
			console.log(json);
		})
	});
	$(document).on('click', '#deleteRutinaM', function() {
		//
		$.ajax({
			url: '../controlador/Rutinas/DeleteRutina.php',
			type: 'POST',
			dataType: 'JSON',
			data: {idRutinaD: $('#idRutinaM').val()},
		})
		.done(function(json) {
			ReadRutina();
			M.toast({html: json.mensaje});
		})
		.fail(function(json) {
			console.log(json);
		})
	});
});
function ReadClasificacionUpdate(){
	option = "";
	$.ajax({
		url: '../controlador/Rutinas/clasificacionRutinaReadP.php',
		type: 'POST',
		dataType: 'JSON',
		data: null,
	})
	.done(function(json) {
		$.each(json.arrayClasificacionRutina, function(index, val) {
			option += "<option value='"+val.idClasificacionRutina+"'>"+val.clrNombre+"</option>";
		});
		$('#idClasificacionRutinaUpdate').html(option);
	})
	.fail(function(json) {
		console.log(json);
	})
}
function ReadClasificacionCreate() {
	option = "";
	$.ajax({
		url: '../controlador/Rutinas/clasificacionRutinaRead.php',
		type: 'POST',
		dataType: 'JSON',
		data: null,
	})
	.done(function(json) {
		$.each(json.arrayClasificacionRutina, function(index, val) {
			option += "<option value='"+val.idClasificacionRutina+"''>"+val.clrNombre+"</option>";
		});
		$('#idClasificacionRutina').html(option);
	})
	.fail(function(json) {
		console.log(json);
	})
}
function ReadRutina() {
	$.ajax({
		url: '../controlador/Rutinas/ReadRutina.php',
		type: 'POST',
		dataType: 'JSON',
		data: null,
	})
	.done(function(json) {
		tablaRutina = "";
		$.each(json.array, function(index, val) {
			tablaRutina += "<tr>";
			tablaRutina += "<td>"+val.clrNombre+"</td>";
			tablaRutina += "<td>"+val.rutNombre+"</td>";
			tablaRutina += "<td><button type='button' class='waves-effect waves-ligh btn  modal-trigger' id='updateRutina' data-target='modalUpdateRutina' onclick=updateRutina("+val.idRutina+")><i class='material-icons right'>create</i>Modificar</button><button type='button' class='waves-effect waves-ligh btn deep-orange lighten-1 modal-trigger' id='deleteRutina' data-target='modalDeleteRutina' onclick=deleteRutina("+val.idRutina+")><i class='material-icons right'>clear</i>Eliminar</button></td>";
			tablaRutina += "</tr>";
		});
		$("#contenidoRutina").html(tablaRutina);
	})
	.fail(function(json) {
		console.log(json);
	})
}
function updateRutina(idR) {
	$.ajax({
		url: '../controlador/Rutinas/ReadRutinaModal.php',
		type: 'POST',
		dataType: 'JSON',
		data: {id: idR},
	})
	.done(function(json) {
		$.each(json.array, function(index, val) {
			$('#idRutina').val(val.idRutina);
			document.getElementById('idClasificacionRutinaUpdate').value = val.idClasificacionRutina;
			$('#rutNombreUpdate').val(val.rutNombre);
		});


		M.toast({html: json.mensaje});
	})
	.fail(function(json) {
		console.log(json);
	})
}
function deleteRutina(id) {
	$('#idRutinaM').val(id);
}
