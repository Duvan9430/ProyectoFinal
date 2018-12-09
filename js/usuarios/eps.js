var id = "";

function CargarModal (idEps){
	
	document.getElementById("txtIdEpsModal").value = idEps;
}
function idEliminar(idEps){
	document.getElementById('idEpsModal').value=idEps;
}

function ModalEliminarrr() {
	  $('#Eliminar').load('../vista/usuarios/formularioEliminar.php')  
	}
	ModalEliminarrr();
$(document).ready(function() {

	$(document).on('click','#btnCrear', function() {
		var formulario = new FormData($('#crearEpsFrm')[0]);
			$.ajax({
				url: '../controlador/usuarios/CtrlCreateEps.php',
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
				listarEps();

				$.ambiance({
				message: "Eps creada con exito",
				title: json.mensaje,
				type:"primary",
				timeout:10,

			});
			listarEps();

			})

			.fail(function() {
				console.log("error");
			})

	})


	$(document).on('click', '#btnModificar', function() {
		var formulario = new FormData($('#formularioModificar')[0]);
		$.ajax({
			url: '../controlador/usuarios/CtrlModificarEps.php',
			type: 'POST',
				dataType: 'json',
				data: formulario,
	  	  	 	cache: false,
	  	  	 	contentType: false,
	            processData: false,
		})
		.done(function(json) {
			console.log("success");
			listarEps();
			
		})
		.fail(function(json) {
			console.log(json);
		})
	});
	function listarEps(){
			$.ajax({
				url: '../controlador/usuarios/ctrlConsultarEps.php',
				type: 'POST',
				dataType: 'JSON',
				data: null,
			})
			.done(function(json) {
				var tabla;
				$.each(json.array, function(index, eps) {
				tabla +='<tr>';
		        tabla +=	'<td>'+eps.epsCodigo+'</td>';
				tabla +=	'<td>'+eps.epsNombre+'</td>';
                tabla +=	'<td><a  onclick="CargarModal('+eps.idEps+')" class="waves-light btn modal-trigger" name="btnCargarModal" id="btnCargarModal" style="background-color:red color: green; font-weight:bold" href="#modalEditar"><i class="large material-icons">border_color</i> </a>';
		        tabla +=	'&nbsp<a onclick="idEliminar('+eps.idEps+')" class="waves-light btn modal-trigger" name="btnCargarEliminar" id="btnCargarEliminar" style="background-color:red color: green; font-weight:bold" href="#modalEliminar"><i class="large material-icons">close</i> </a></td>';
		        tabla +='</tr>';
				});
				$('#bodyEps').html(tabla);
			})
			.fail(function() {
				alertify.error('Error comuniquese con el Administrador');
			})
    	}
		listarEps();
		$(document).on("click","#btnCargarModal",function() {
			//alert('HOLA');
		  	$.ajax({
		  		url: '../controlador/usuarios/ctrlConsultarModalEps.php',
		  		type: 'POST',
		  		dataType: 'JSON',
		  		data: {idEps: $('#txtIdEpsModal').val()}
		  	})
		  	.done(function(json) {
		  		console.log("success");
		  		document.getElementById('txtEpsCodigoModal').value = json.epss[0].epsCodigo;
				document.getElementById('txtEpsNombreModal').value = json.epss[0].epsNombre;
		  		
		  	})
		  	
		  	.fail(function() {
		  		console.log("error");
		  	})
       });



		$(document).on("click","#btnEliminar",function(){
		$.ajax({
			url: '../controlador/usuarios/ctrlEliminarEps.php',
			type: 'POST',
			dataType: 'JSON',
			data: $('#formularioEliminar').serialize(),
		})
		.done(function(json) {
			console.log(json.exito);
			listarEps();
			console.log("success");
			
		})
		.fail(function(retorno) {
			console.log(retorno);
			listarEps();
		});
	})
	listarEps();
});





