$(document).ready(function(){

	$(document).on('click','#btnIniciar', function()
	{
		$.ajax({
			url: 'controlador/loginCreate.php',
			type: 'POST',
			dataType: 'json',
			data: $('#frmLogin').serialize(),
		})
		.done(function(json) {
			if (json.estado == true) {
				M.toast({html: 'Bienvenido!  '+json.array.perPrimerNombre+" "+json.array.perSegundoNombre+" "+json.array.perPrimerApellido})
				location.reload();
				console.log("success");
			}
			else if(json.estado == false){
				M.toast({html: "Usuario o contraseña incorrecta"});
			}
		})
		.fail(function(json) {
			console.log("error");
		})
	})
});

