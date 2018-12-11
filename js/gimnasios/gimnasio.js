
var id = "";
function CargarModal (idGimnasio){
	document.getElementById("txtIdGimnasioMod").value = idGimnasio;
}

function idEliminar(idGimnasio){
	id = idGimnasio;
}

$(document).ready(function() {
	var sede = "";
	listarSede();
	$(".modal").modal();
	//Listar Sede
	function listarSede(){
		$.ajax({
			url: '../controlador/gimnasios/sedeRead.php',
			type: 'POST',
			dataType: 'json',
			data: null,
		})
		.done(function(retorno) {
			sede = "<option value='' disabled selected>--Seleccione--</option>";
			$.each(retorno, function(i, item) {
				sede +="<option value='"+item.idSede+"'>"+item.sedNombre+"</option>";
			});
			//$("#sltSede").html(sede);
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
	}
	
	// Función Crear Gimnasio
	$(document).on('click','#btnCrear', function() {
		var formulario = new FormData($('#crearGimnasioFrm')[0]);

			$.ajax({
				url: '../controlador/gimnasios/ctrlCreateGimnasio.php',
				type: 'POST',
				dataType: 'json',
				data: formulario,
	  	  	 	cache: false,
	  	  	 	contentType: false,
	            processData: false,
	 
			})
			.done(function(json) {
				console.log("success");
				console.log("success");
				listarGimnasio();
				$('#crearGimnasioFrm').trigger("reset");
				M.toast({html: 'Gimnasio creado con exito!'})
				listarGimnasio();

			})

			.fail(function(json) {
				console.log("error");
			})
			
      		
		})

	//Funcion Modificar Registro
	$(document).on('click', '#btnModificar', function(){
		var formulario = new FormData($('#modificarGimnasioFrm')[0]);

		$.ajax({
			url: '../controlador/gimnasios/ctrlModificarGimnasio.php',
			type: 'POST',
			dataType: 'json',
			data: formulario,
			cache: false,
			contentType: false,
			processData: false,
		})
		.done(function(json) {
			console.log("success");
			listarGimnasio();
			M.toast({html: 'Gimnasio Modificado con exito!'})
	
		.fail(function(json) {
			console.log("error");
		})
		})
		
	})
	$(".modal").modal();
	$(".modalGrande").modalGrande();

	//Tabla con registros de la base de datos
	function listarGimnasio(){

			$.ajax({
				url: '../controlador/gimnasios/ctrlConsultarGimnasio.php',
				type: 'POST',
				dataType: 'JSON',
				data: null,
			})
			.done(function(json) {
				var tabla = "";
				$.each(json.array, function(index, gimnasio) {
				tabla +='<tr>';
		        tabla +='<td>'+gimnasio.gimNombre+'</td>';
		        tabla +='<td>'+gimnasio.cefNombre+'</td>';
		        tabla +='<td>'+gimnasio.sedNombre+'</td>';
		        tabla +='<td><img width=px50, height=70px, src="../img/gimnasios/Gimnasios/'+gimnasio.gimImagen+'"></td>';
		        tabla +='<td>'+gimnasio.gimDescripcion+'</td>';
		       	tabla +='<td><a onclick="CargarModal('+gimnasio.idGimnasio+')" class="waves-light btn modalGrande-trigger" name="btnCargarModal" id="btnCargarModal" style="background-color:red color: green; font-weight:bold" href="#modalEditar"><i class="large material-icons">border_color</i></a></td>';
		       	tabla +='<td><a onclick="idEliminar('+gimnasio.idGimnasio+')" class="waves-light btn modal-trigger" name="btnCargarEliminar" id="btnCargarEliminar" style="background-color:red color: green; font-weight:bold" href="#modalEliminar"><i class="large material-icons">close</i></a></td>';
		        tabla +='</tr>';
				});
				$('#bodyGimnasio').html(tabla);
			})
			.fail(function(json) {
				console.log("error");
				//alertify.error('Error comuniquese con el Administrador');
			})
	}

	//Cargar Modal con los datos 
	$(document).on('click', '#btnCargarModal', function(){
		$.ajax({
			url: '../controlador/gimnasios/ctrlConsultarModalGimnasio.php',
			type: 'POST',
			dataType: 'json',
			data: {idGimnasio: $('#txtIdGimnasioMod').val()},
		})
		.done(function(json) {
			console.log("success");
			document.getElementById('txtagimNombreMod').value=json.gimnasio[0].gimNombre;
			document.getElementById('txtadescripcionGimnasioMod').value=json.gimnasio[0].gimDescripcion;
			document.getElementById('txtimgGimnasioMod').value=json.gimnasio[0].gimImagen;
			document.getElementById('sltDireccionMod').value=json.gimnasio[0].idCentroFormacion;
			document.getElementById('sltSedeMod').value=json.gimnasio[0].idSede;
		})
		.fail(function(json) {
			console.log("error");
		})
	})
	
	//Función Eliminar Registro
	$(document).on('click','#btnEliminar', function(){
		$.ajax({
			url: '../controlador/gimnasios/ctrlEliminarGimnasio.php',
			type: 'POST',
			dataType: 'json',
			data: {idGimnasioEliminar: id},
		})
		.done(function(json) {
			console.log("success");
			console.log(json.mensaje);

			M.toast({html: 'Gimnasio Eliminado con exito!'})
			
			listarGimnasio();
		})
		.fail(function(retorno) {
			console.log(retorno);
			console.log("error");
		})
	})
		listarGimnasio();
});