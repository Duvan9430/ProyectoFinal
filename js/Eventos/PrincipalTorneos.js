var tarjetas = "";
$(document).ready(function() {
	function cargarTorneos(){
		$.ajax({
			url: '../../controlador/Eventos/principalConsultarTorneos.php',
			type: 'POST',
			dataType: 'JSON',
			data: null,
		})
		.done(function(json) {
			$.each(json.arrayTorneo, function(i, fila) {
				tarjetas += '<div class="card blue-grey darken-1">';
				tarjetas += '<div class="card-content white-text">'
				tarjetas += '<span class="card-title">'+fila.torNombre+'</span>';
				tarjetas += '<div class="divider"></div>';
				tarjetas += 'Clasificacion: '+fila.claNombre+'<br>';
				tarjetas += 'Disciplina: '+fila.disNombre+'<br>';
				tarjetas += 'Lugar: '+fila.lugNombre+'<br>';
				tarjetas += 'Genero: '+fila.getNombre+'<br>';
				tarjetas += 'Tipo Eliminatoria: '+fila.tieNombre+'<br>';
				tarjetas += 'Equipos: '+fila.torNumeroEquipos+'<br>';
				tarjetas += 'Fecha Inicio: '+fila.torFechaInicio+'<br>';
				tarjetas += 'Fecha Fin: '+fila.torFechaFin+'<br>';
				tarjetas += '</div>';
				tarjetas += '</div>';
			});
			$('#TorneosPrincipal').html(tarjetas);
		})
		.fail(function() {
			console.log("error");
		})
	}
	cargarTorneos();
});

			