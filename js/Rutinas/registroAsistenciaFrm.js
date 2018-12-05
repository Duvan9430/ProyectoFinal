function eventoSubmit() {
	var form = document.getElementById('frmAsistencia');

	// Adds a listener for the "submit" event.
	form.addEventListener('submit', function(e) {

	  e.preventDefault();

	});
}
$(document).ready(function() {
	autocompletar();
	eventoSubmit();
	$('.slider').slider({indicators:false});

	$(document).on('click', '#btnEnviar', function() {
		$.ajax({
			url: '../controlador/Rutinas/InsertAsistencia.php',
			type: 'POST',
			dataType: 'JSON',
			data: $('#frmAsistencia').serialize(),
		})
		.done(function(json) {
			M.toast({html: json.mensaje});
		})
		.fail(function(json) {
			console.log(json);
		})		
	});
	function autocompletar() {
		$.ajax({
			url: '../controlador/Rutinas/ReadIdentificacion.php',
			type: 'POST',
			dataType: 'JSON',
			data: null,
		})
		.done(function(retorno) {
			//console.log("success");
			var id = [];
			$.each(retorno.array, function(index, val) {
				id[val.perNit] = null;
			});
			$('input.autocomplete').autocomplete({
	          data: id,
	          limit: 5, // The max amount of results that can be shown at once. Default: Infinity.
	        });

		})
		.fail(function() {
			console.log("error");
		})		
	}	
});
