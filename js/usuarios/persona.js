var id = "";

function CargarModal (idPersona){
	document.getElementById("txtIdPersonaModal").value = idPersona;
}

function idEliminar(idPersona){
	id = idPersona;
}
	$(function() {
  		$('#txtPerFoto').change(function(e) {
      		addImage(e); 
    	 });

    function addImage(e){
      var file = e.target.files[0],
      imageType = /image.*/;
    
      if (!file.type.match(imageType))
       return;
  
      var reader = new FileReader();
      reader.onload = fileOnload;
      reader.readAsDataURL(file);
     }
  
     function fileOnload(e) {
      var result=e.target.result;
      $('#imgSalida').attr("src",result);
     }
    });
  function consultarDepartamento() {
    $.ajax({
      url: '../controlador/usuarios/departamento.php',
      type: 'POST',
      dataType: 'json',
      data: null,
    })
    .done(function(json) {
      var option = null;
      option = '<option value="" disabled selected>Seleccione el Departamento</option>';
      $.each(json.departamento ,function(index, val) {
        option += '<option value='+val.idDepartamento+'>'+val.depNombre+'</option>';
      });
      $('#sltDepartamento').html(option);
    })
    .fail(function() {
      console.log("error");
    })
  };

  consultarDepartamento();

  $('#sltDepartamento').on('change',function(){
    var valorDepartamento = $(this).val();
    document.getElementById("departamentoId").value = valorDepartamento;
    consultarMunicipioNacimiento();
  });
function consultarMunicipioNacimiento() {
			$.ajax({
				url: '../controlador/usuarios/municipioNac.php',
				type: 'POST',
				dataType: 'json',
				data: {idDepartamento: $('#departamentoId').val()},
			})
			.done(function(json) {
				console.log("success");
				var option=null;
				option='<option value= "" disabled selected>Seleccione el municipio</option>';
				$.each(json, function(index, val) {
					option += '<option value='+val.idMunicipio+'>'+val.munNombre+'</option>';
				});
				$('#txtIdMunicipioNacimiento').html(option);
			})
			.fail(function(retorno) {
				console.log(retorno);
			});
		}


$(document).ready(function() {
    $(".tabs").tabs();
    $(".modalGrande").modalGrande();
	$(document).on('click','#btnCrear', function() {
		var formulario = new FormData($('#crearPersonaFrm')[0]);
			$.ajax({
				url: '../controlador/usuarios/CtrlCreatePersona.php',
				type: 'POST',
				dataType: 'json',
				data: formulario,
	  	  	 	cache: false,
	  	  	 	contentType: false,
	            processData: false,
	 
			})
			.done(function(json) {
				console.log("success");
				listarPersona();
				console.log(json);

				$.ambiance({
				message: "persona creada con exito",
				title: json.mensaje,
				type:"primary",
				timeout:10,

			});
			listarPersona();

			})

			.fail(function(retorno) {
				console.log(retorno);
			})

	})
	$("#txtIdAprendiz").change(function(){
	var valor=document.getElementById('txtIdAprendiz').value;
	console.log(valor);
	if (valor==2) {
		
		$("#perfil").html('<div class="row"><div class="input-field col s1"><i class="material-icons prefix">whatshot</i></div><div class="input-field col s3"><select name="txtIdFicha" id="txtIdFicha" class="browser-default"> </select></div><div class="input-field col s1"><i class="material-icons prefix">whatshot</i></div><div class="input-field col s3"><textarea rows="7" cols="60" id="txtAprDiscapacidad"></textarea>  <label for="icon_prefix">Discapacidad</label></div></div>')
		consultarFicha();
	}else if(valor==3){
		$("#perfil").html('<div class="row"><div class="input-field col s1"><i class="material-icons prefix">local_hospital</i></div><div class="input-field col s4"><select name="txtIdArea" id="txtIdArea" class="browser-default">Area</select></div></div>');
		consultarArea();
	}
});


	$(document).on('click', '#btnModificar', function() {
		var formulario = new FormData($('#formularioModificar')[0]);
		$.ajax({
			url: '../controlador/usuarios/CtrlModificarPersona.php',
			type: 'POST',
				dataType: 'json',
				data: formulario,
	  	  	 	cache: false,
	  	  	 	contentType: false,
	            processData: false,
		})
		.done(function(json) {
			console.log(json);
			listarPersona();
			
		})
		.fail(function(json) {
			console.log(json);
		})
	});

	function listarPersona(){
			$.ajax({
				url: '../controlador/usuarios/ctrlConsultarPersona.php',
				type: 'POST',
				dataType: 'JSON',
				data: null,
			})
			.done(function(json) {
				var tabla = '';
				tabla += '<table class="table table-striped table-border centered display responsive-table" id="tablaPersona" style="width: 100%">';
			    tabla += '<thead>';
			    tabla += '<tr>';
				tabla += '<th>Nombres y Apellidos</th>';
				tabla += '<th>Tipo Documento</th>';
				tabla += '<th>Número Identificación</th>';
				tabla += '<th>Fecha Nacimiento</th>';
				tabla += '<th>Dirección</th>';
				tabla += '<th>Municipio Residencia</th>';
				tabla += '<th>Celular</th>';
				tabla += '<th>RH</th>';
				tabla += '<th>E-mail</th>';
				tabla += '<th>Opciones</th>';
				tabla += '</tr>';
			    tabla += '</thead>';
				tabla += '<tbody id="bodyPersona" >';
				$.each(json.array, function(index, persona) {
					tabla +='<tr>';
			        tabla +=	'<td>'+persona.perPrimerNombre+' '+persona.perSegundoNombre+' '+persona.perPrimerApellido+' '+persona.perSegundoApellido+'</td>';
			        tabla +=	'<td>'+persona.tidNombre+'</td>';
			        tabla +=	'<td>'+persona.perNit+'</td>';
			        tabla +=	'<td>'+persona.perFechaNacimiento+'</td>';
			        tabla +=	'<td>'+persona.perDireccion+'</td>';
					tabla +=	'<td>'+persona.munNombre+'</td>';
					tabla +=	'<td>'+persona.perCelular+'</td>';
					tabla +=	'<td>'+persona.grsNombre+'</td>';
					tabla +=	'<td>'+persona.perCorreoElectronico+'</td>';
	                tabla +=	'<td><a  onclick="CargarModal('+persona.idPersona+')" class="waves-light btn modalGrande-trigger" name="btnCargarModal" id="btnCargarModal" style="background-color:red color: green; font-weight:bold" href="#modalEditar"><i class="large material-icons">border_color</i> </a><br><br>';
			        tabla +=	'&nbsp<a  onclick="idEliminar('+persona.idPersona+')" class="waves-light btn modal-trigger" name="btnCargarEliminar" id="btnCargarEliminar" style="background-color:red color: green; font-weight:bold" href="#modalEliminar"><i class="large material-icons">close</i> </a></td>';
			        tabla +='</tr>';
				});
			    tabla += '</tbody>';
			    tabla += '</table>';
				$('#TablaPersonaP').html(tabla);
				$('#tablaPersona').DataTable({
		      	 dom: 'Bfrtip',
		        	buttons: [
		            	'excel', 'print'
		        	]  
		    	});
			})
			.fail(function(json) {
				M.toast({html:'Error comuniquese con el Administrador'});
				console.log(json);
			});
    }
		listarPersona();



		$(document).on("click","#btnCargarModal",function() {
		  	$.ajax({
		  		url: '../controlador/usuarios/ctrlConsultarModalPersona.php',
		  		type: 'POST',
		  		dataType: 'JSON',
		  		data: {idPersona: $('#txtIdPersonaModal').val()}
		  	})
		  	.done(function(json) {
		  		console.log("success");
		  		console.log(json);
		  		document.getElementById('txtIdMunicipioResidenciaModal').value=json.personas[0].idMunicipio;
                document.getElementById('txtIdMunicipioNacimientoModal').value=json.personas[0].idMunicipio;
		  		document.getElementById('txtIdTipoDocumentoModal').value=json.personas[0].idTipoDocumento;
		  		document.getElementById('txtIdGrupoSanguineoModal').value=json.personas[0].idGrupoSanguineo;
		  		document.getElementById('txtIdGeneroModal').value=json.personas[0].idGenero;
		  		document.getElementById('txtIdSedeModal').value=json.personas[0].idSede;
		  		document.getElementById('txtIdEpsModal').value=json.personas[0].idEps;
		  		document.getElementById('txtIdRegimenModal').value=json.personas[0].idRegimen;
		  		document.getElementById('txtPerNitModal').value=json.personas[0].perNit;
		  		document.getElementById('txtPerPrimerNombreModal').value=json.personas[0].perPrimerNombre;
		  		document.getElementById('txtPerSegundoNombreModal').value=json.personas[0].perSegundoNombre;
		  		document.getElementById('txtPerPrimerApellidoModal').value=json.personas[0].perPrimerApellido;
		  		document.getElementById('txtPerSegundoApellidoModal').value=json.personas[0].perSegundoApellido;
		  		document.getElementById('txtPerFechaNacimientoModal').value=json.personas[0].perFechaNacimiento;
		  		document.getElementById('txtPerCelularModal').value=json.personas[0].perCelular;
		  		document.getElementById('txtPerCorreoElectronicoModal').value=json.personas[0].perCorreoElectronico;
		  		document.getElementById('txtPerDireccionModal').value=json.personas[0].perDireccion;
		  		
		  	})
		  	.fail(function() {
		  		console.log("error");
		  	})
       });


		$(document).on("click","#btnEliminar",function(){

		           $.ajax({
		           	url: '../controlador/usuarios/ctrlEliminarPersona.php',
		           	type: 'POST',
		           	dataType: 'JSON',
		           	data: {idPersonaEliminar: id},
		           })
		           
		           .done(function(json) {
		           	console.log("success");
		           	console.log(json.exito);
		           	console.log(json.mensaje);
		           	$.ambiance({
					message: "Persona eliminada con exito",
					title: json.mensaje,
					type:"error",
					timeout:10,

				});
		           	listarPersona();
		           })
		           .fail(function(retorno) {
		           	console.log(retorno);
		           	console.log("error");
		           })
			  	});

		
		//consultarFicha();
		function consultarArea() {
			$.ajax({
				url: '../controlador/usuarios/area.php',
				type: 'POST',
				dataType: 'JSON',
				data: null,
			})
			.done(function(json) {
				console.log("success");
				var option=null;
				option='<option value= "" disabled selected>Seleccione el area</option>';
				$.each(json.arrayArea, function(index, val) {
					option += '<option value='+val.idArea+'>'+val.areNombre+'</option>';
				});
				$('#txtIdArea').html(option);
			})
			.fail(function() {
				console.log("error");
			});
		}
		function consultarMunicipioResidencia() {
			$.ajax({
				url: '../controlador/usuarios/municipio.php',
				type: 'POST',
				dataType: 'JSON',
				data: null,
			 })
			.done(function(json) {
				console.log("success");
				var option=null;
				option='<option value= "" disabled selected>Seleccione el municipio</option>';
				$.each(json.arrayMunicipio, function(index, val) {
					option += '<option value="'+val.idMunicipio+'">'+val.munNombre+'</option>';
				});
				$('#txtIdMunicipioResidencia').html(option);
			})
			.fail(function() {
				console.log("error");
			});
		}
		consultarMunicipioResidencia();

		function consultarTipoDocumento() {
			$.ajax({
				url: '../controlador/usuarios/tipoDocumento.php',
				type: 'POST',
				dataType: 'JSON',
				data: null,
			})
			.done(function(json) {
				console.log("success");
				var option= null;
				option ='<option value= "" disabled selected>Seleccione el tipo Documento</option>';
				$.each(json.arrayTipoDocumento, function(index, val) {
					option += '<option value="'+val.idTipoDocumento+'">'+val.tidNombre+'</option>';
				});
				$('#txtIdTipoDocumento').html(option);
			})
			.fail(function(retorno) {
				console.log(retorno);
			});
		}
		consultarTipoDocumento();
		function consultarGenero() {
			$.ajax({
				url: '../controlador/usuarios/genero.php',
				type: 'POST',
				dataType: 'JSON',
				data: null,
			})
			.done(function(json) {
				console.log("success");
				var option=null;
				option='<option value= "" disabled selected>Seleccione el genero</option>';
				$.each(json.arrayGenero, function(index, val) {
					option += '<option value="'+val.idGenero+'">'+val.genNombre+'</option>';
				});
				$('#txtIdGenero').html(option);
			})
			.fail(function() {
				console.log("error");
			});
		}
		consultarGenero();
		function consultarGrupoSanguineo() {
			$.ajax({
				url: '../controlador/usuarios/grupoSanguineo.php',
				type: 'POST',
				dataType: 'JSON',
				data: null,
			})
			.done(function(json) {
				console.log("success");
				var option=null;
				option='<option value= "" disabled selected>Seleccione el grupo sanguineo</option>';
				$.each(json.arrayGrupoSanguineo, function(index, val) {
					option += '<option value="'+val.idGrupoSanguineo+'">'+val.grsNombre+'</option>';
				});
				$('#txtIdGrupoSanguineo').html(option);
			})
			.fail(function() {
				console.log("error");
			});
		}
		consultarGrupoSanguineo();
		function consultarSede() {
			$.ajax({
				url: '../controlador/usuarios/sede.php',
				type: 'POST',
				dataType: 'JSON',
				data: null,
			})
			.done(function(json) {
				console.log("success");
				var option=null;
				option='<option value= "" disabled selected>Seleccione sede</option>';
				$.each(json.arraySede, function(index, val) {
					option += '<option value="'+val.idSede+'">'+val.sedNombre+'</option>';
				});
				$('#txtIdSede').html(option);
			})
			.fail(function() {
				console.log("error");
			});
		}
		consultarSede();
		function consultarEps() {
			$.ajax({
				url: '../controlador/usuarios/eps.php',
				type: 'POST',
				dataType: 'JSON',
				data: null,
			})
			.done(function(json) {
				console.log("success");
				var option=null;
				option='<option value= "" disabled selected>Seleccione la eps</option>';
				$.each(json.arrayEps, function(index, val) {
					option += '<option value="'+val.idEps+'">'+val.epsNombre+'</option>';
				});
				$('#txtIdEps').html(option);
			})
			.fail(function() {
				console.log("error");
			});
		}
		consultarEps();
		function consultarRegimen() {
			$.ajax({
				url: '../controlador/usuarios/regimen.php',
				type: 'POST',
				dataType: 'JSON',
				data: null,
			})
			.done(function(json) {
				console.log("success");
				var option=null;
				option='<option value= "" disabled selected>Seleccione el regimen</option>';
				$.each(json.arrayRegimen, function(index, val) {
					option += '<option value="'+val.idRegimen+'">'+val.regNombre+'</option>';
				});
				$('#txtIdRegimen').html(option);
			})
			.fail(function() {
				console.log("error");
			});
		}
		consultarRegimen();
	//-------------------
	function consultarMunicipioNacimientoModal() {
			$.ajax({
				url: '../controlador/usuarios/municipioModal.php',
				type: 'POST',
				dataType: 'JSON',
				data: null,
			})
			.done(function(json) {
				console.log("success");
				var option=null;
				option='<option value= "" disabled selected>Seleccione el municipio</option>';
				$.each(json.arrayMunicipioModal, function(index, val) {
					option += '<option value='+val.idMunicipio+'>'+val.munNombre+'</option>';
				});
				$('#txtIdMunicipioNacimientoModal').html(option);
			})
			.fail(function() {
				console.log("error");
			});
		}
		consultarMunicipioNacimientoModal();
		function consultarMunicipioResidenciaModal() {
			$.ajax({
				url: '../controlador/usuarios/municipioModal.php',
				type: 'POST',
				dataType: 'JSON',
				data: null,
			})
			.done(function(json) {
				console.log("success");
				var option="";
				option='<option value= "" disabled selected>Seleccione el municipio</option>';
				$.each(json.arrayMunicipioModal, function(index, val) {
					option += '<option value="'+val.idMunicipio+'">'+val.munNombre+'</option>';
				});
				$('#txtIdMunicipioResidenciaModal').html(option);
			})
			.fail(function() {
				console.log("error");
			});
		}
		consultarMunicipioResidenciaModal();

		function consultarTipoDocumentoModal() {
			$.ajax({
				url: '../controlador/usuarios/tipoDocumentoPersonaModal.php',
				type: 'POST',
				dataType: 'JSON',
				data: null,
			})
			.done(function(json) {
				console.log("success");
				var option= "";
				option ='<option value= "" disabled selected>Seleccione el tipo Documento</option>';
				$.each(json.arrayTipoDocumentoModal, function(index, val) {
					option += '<option value="'+val.idTipoDocumento+'">'+val.tidNombre+'</option>';
				});
				$('#txtIdTipoDocumentoModal').html(option);
			})
			.fail(function(retorno) {
				console.log(retorno);
			});
		}
		consultarTipoDocumentoModal();
		
		function consultarGeneroModal() {
			$.ajax({
				url: '../controlador/usuarios/generoModal.php',
				type: 'POST',
				dataType: 'JSON',
				data: null,
			})
			.done(function(json) {
				console.log("success");
				var option=null;
				option='<option value= "" disabled selected>Seleccione el genero</option>';
				$.each(json.arrayGeneroModal, function(index, val) {
					option += '<option value="'+val.idGenero+'">'+val.genNombre+'</option>';
				});
				$('#txtIdGeneroModal').html(option);
			})
			.fail(function() {
				console.log("error");
			});
		}
		consultarGeneroModal();
		function consultarGrupoSanguineoModal() {
			$.ajax({
				url: '../controlador/usuarios/grupoSanguineoModal.php',
				type: 'POST',
				dataType: 'JSON',
				data: null,
			})
			.done(function(json) {
				console.log("success");
				var option=null;
				option='<option value= "" selected>Seleccione el grupo sanguineo</option>';
				$.each(json.arrayGrupoSanguineoModal, function(index, val) {
					option += '<option value="'+val.idGrupoSanguineo+'">'+val.grsNombre+'</option>';
				});
				$('#txtIdGrupoSanguineoModal').html(option);
			})
			.fail(function() {
				console.log("error");
			});
		}
		consultarGrupoSanguineoModal();
		function consultarSedeModal() {
			$.ajax({
				url: '../controlador/usuarios/sedeModal.php',
				type: 'POST',
				dataType: 'JSON',
				data: null,
			})
			.done(function(json) {
				console.log("success");
				var option=null;
				option='<option value= "" disabled selected>Seleccione sede</option>';
				$.each(json.arraySedeModal, function(index, val) {
					option += '<option value="'+val.idSede+'">'+val.sedNombre+'</option>';
				});
				$('#txtIdSedeModal').html(option);
			})
			.fail(function() {
				console.log("error");
			});
		}
		consultarSedeModal();
		function consultarEpsModal() {
			$.ajax({
				url: '../controlador/usuarios/epsModal.php',
				type: 'POST',
				dataType: 'JSON',
				data: null,
			})
			.done(function(json) {
				console.log("success");
				var option=null;
				option='<option value= "" disabled selected>Seleccione la eps</option>';
				$.each(json.arrayEpsModal, function(index, val) {
					option += '<option value="'+val.idEps+'">'+val.epsNombre+'</option>';
				});
				$('#txtIdEpsModal').html(option);
			})
			.fail(function() {
				console.log("error");
			});
		}
		consultarEpsModal();
		function consultarRegimenModal() {
			$.ajax({
				url: '../controlador/usuarios/regimenModal.php',
				type: 'POST',
				dataType: 'JSON',
				data: null,
			})
			.done(function(json) {
				console.log("success");
				var option=null;
				option='<option value= "" disabled selected>Seleccione el regimen</option>';
				$.each(json.arrayRegimenModal, function(index, val) {
					option += '<option value="'+val.idRegimen+'">'+val.regNombre+'</option>';
				});
				$('#txtIdRegimenModal').html(option);
			})
			.fail(function() {
				console.log("error");
			});
		}
		consultarRegimenModal();
		function consultarFicha() {
			$.ajax({
				url: '../controlador/usuarios/ficha.php',
				type: 'POST',
				dataType: 'JSON',
				data: null,
			})
			.done(function(json) {
				console.log("success");
				var option=null;
				option='<option value="" disabled selected>Seleccione Ficha</option>';
				$.each(json.arrayFicha, function(index, val) {
					option += '<option value='+val.idFicha+'>'+val.ficNombre+'</option>';
				});
				$('#txtIdFicha').html(option);
				console.log(option);
			})
			.fail(function(retorno) {
				console.log(retorno);
			});
		}

});



