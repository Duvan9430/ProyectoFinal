var id = "";

function CargarModal (idMaquina){
	//alert(idMaquina);
	document.getElementById("txtIdMaqModal").value = idMaquina;
}
/*function CargarModalEliminar (idMaquina){
	document.getElementById("txtIdMaqModal").value = idMaquina;*/
function idEliminar(idMaquina){
	id = idMaquina;
}


$(document).ready(function() {
	$(".modal").modal();
	$(".modalGrande").modalGrande();

	$(document).on('click','#btnCrearMaq', function() {
		var formulario = new FormData($('#crearMaquinaFrm')[0]);
		if ($('#txtmaqNombre').val() !="" 
      	&& $('#txtmaqImagen').val() != "" 
     	&& $('#txtmaqCodigo').val() != ""
      	&& $('#txtmaqDescripcion').val() !="" 
      	&& $('#txtmaqObservacion').val() !="" ){
	 
			$.ajax({
				url: '../controlador/gimnasios/ctrlCreateMaquina.php',
				type: 'POST',
				dataType: 'json',
				data: formulario,
	  	  	 	cache: false,
	  	  	 	contentType: false,
	            processData: false,
			})
			.done(function(json) {
				console.log("success");	
				listarMaquina();
				$('#crearMaquinaFrm').trigger("reset");

				 M.toast({html: 'Máquina creada con exito!'})
			})

			.fail(function() {
				console.log("error");
			})
			}else{
      			M.toast({html: 'Por favor complete los campos!'})
      		}
     	});


	$(document).on('click', '#btnModificar', function() {
		var formulario = new FormData($('#formularioModificar')[0]);
		if ($('#txtmaqNombreModal').val() !="" 
      	//&& $('#txtmaqImagenModal').val() != "" 
      	&& $('#txtmaqCodigoModal').val() != ""
      	&& $('#txtmaqDescripcionModal').val() !="" 
      	&& $('#txtmaqObservacionModal').val() !="" ){ 
		$.ajax({
			url: '../controlador/gimnasios/ctrlModificarMaquina.php',
			type: 'POST',
				dataType: 'json',
				data: formulario,
	  	  	 	cache: false,
	  	  	 	contentType: false,
	            processData: false,
		})
		.done(function(json) {
			console.log("success");
			listarMaquina();
			$('#crearMaquinaFrm').trigger("reset");
			 M.toast({html: 'Máquina Modificada con exito!'})
		})

		.fail(function(json) {
			console.log(json);
		})
		}else{
      		M.toast({html: 'Por favor complete los campos'})
     	}
	});

	



	function listarMaquina(){
		$.ajax({
			url: '../controlador/gimnasios/ctrlConsultarMaquina.php',
			type: 'POST',
			dataType: 'JSON',
			data: null,
		})
		.done(function(json) {
			var tabla = "";
			$.each(json.array, function(index, maquina) {
			tabla +='<tr>';
		    tabla +='<td>'+maquina.maqNombre+'</td>';
		    tabla +='<td>'+maquina.maqCodigo+'</td>';
		    tabla +='<td>'+maquina.maqDescripcion+'</td>';                                                                                               
		    tabla +='<td>'+maquina.maqObservacion+'</td>';
		    tabla +='<td><img width=px50, height=70px, src="../img/gimnasios/Maquinas/'+maquina.maqImagen+'"></td>';
            tabla +='<td><a  onclick="CargarModal('+maquina.idMaquina+')" class="waves-light btn modalGrande-trigger" name="btnCargarModal" id="btnCargarModal" style="background-color:red color: green; font-weight:bold" href="#modalEditar"><i class="large material-icons ">border_color</i></a></td>';
		    tabla +='<td><a  onclick="idEliminar('+maquina.idMaquina+')" class="waves-light btn modal-trigger" name="btnCargarEliminar" id="btnCargarEliminar" style="background-color:red color: green; font-weight:bold" href="#modalEliminar"><i class="large material-icons">close</i></a></td>';
		    tabla +='</tr>';
			});

			$('#bodyMaquina').html(tabla);
			
			})
			.fail(function(json) {
				console.log("error");//alertify.error('Error comuniquese con el Administrador');
			});
    }



		$(document).on("click","#btnCargarModal",function() {
			//alert('HOLA');
		  	$.ajax({
		  		url: '../controlador/gimnasios/ctrlConsultarModalMaquina.php',
		  		type: 'POST',
		  		dataType: 'JSON',
		  		data: {idMaquina: $('#txtIdMaqModal').val()}
		  	})
		  	.done(function(json) {
		  		console.log("success");
		  		console.log(json.exito);
		  		document.getElementById('txtmaqNombreModal').value=json.maquinas[0].maqNombre;
                document.getElementById('txtmaqCodigoModal').value=json.maquinas[0].maqCodigo;
		  		document.getElementById('txtmaqDescripcionModal').value=json.maquinas[0].maqDescripcion;
		  		document.getElementById('txtmaqObservacionModal').value=json.maquinas[0].maqObservacion;
		  		
		  	})
		  	.fail(function() {
		  		console.log("error");
		  	})
       });


		$(document).on("click","#btnEliminar",function(){

		           $.ajax({
		           	url: '../controlador/gimnasios/ctrlEliminarMaquina.php',
		           	type: 'POST',
		           	dataType: 'JSON',
		           	data: {idMaquinaEliminar: id},
		           })
		           
		           .done(function(json) {
		           	console.log("success");
		           	listarMaquina();
			 		M.toast({html: 'Máquina Eliminada con exito!'})
		           	
		           })
		           .fail(function(retorno) {
		           	console.log(retorno);
		           	console.log("error");
		           	listarMaquina();
		           })
		});
		listarMaquina();

});





