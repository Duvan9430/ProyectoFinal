function informacion(idRutina) {
  document.getElementById('idRutina').value=idRutina;
  var idRutina=idRutina;
  $.ajax({
      url: '../controlador/Rutinas/dtllesRtna.php',
      type: 'POST',
      dataType: 'JSON',
      data: 'idRutina='+idRutina,
  })
  .done(function(json) {
      console.log("success");
      var hola="";
      $.each(json, function(index, val) {

			hola +='<label>Ejercicio: '+val.ejeNombre+'</label><br>';
			hola += '<p>Descripcion: '+val.ejeDetalles+'</p><br>';

    	});
      $('#detalles').html(hola);
  })
  .fail(function() {
      console.log("error");
  })
}
$(document).ready(function() {

  $(".modalMediano").modalMediano();

	 $('.fixed-action-btn').floatingActionButton({
      direction: 'left',
      hoverEnabled: false
    });

    $('.tabs').tabs();

    $('.tooltipped').tooltip();

    $.ajax({
    	url: '../controlador/Rutinas/CtrlRutina.php',
    	type: 'POST',
    	dataType: 'JSON',
    	data: null,
    })
    .done(function(json) {
    	console.log("success");
    	var tablaPecho="";
    	$.each(json, function(index, val) {

			tablaPecho +='<div class="col s4">';
			tablaPecho += '<div class="card-panel">';
			tablaPecho += '<div class="card-content black-text">';
			tablaPecho += '<span class="card-title">'+val.rutNombre+'</span>';
			tablaPecho +=  '<p> Clasificacion:'+val.clrNombre+'</p>';
			tablaPecho += '</div>';
		 	tablaPecho += '<div class="card-action">';
			tablaPecho += '<a onclick="informacion('+val.idRutina+')" class="modalMediano-trigger" href="#modal1">Ver Más</a>';
			tablaPecho += '</div>';
			tablaPecho += '</div>';
      tablaPecho += '</div>';



    	});
    $('#TablaPecho').html(tablaPecho);
    })
    .fail(function() {
    	console.log("error");
    })
    //Espalda
     $.ajax({
    	url: '../controlador/Rutinas/CtrlConsultarEspalda.php',
    	type: 'POST',
    	dataType: 'JSON',
    	data: null,
    })
    .done(function(json) {
    	console.log("success");
    	var TablaEspalda = "";
    	$.each(json, function(index, val) {

			TablaEspalda +='<div class="col s4">';
			TablaEspalda +='<div class="card"> ';
			TablaEspalda += '<div class="card-image waves-effect waves-block waves-light">';
			TablaEspalda += '<img class="activator" <img src="../img/'+val.ejmFoto+'" width="380px" height="250px">';
			TablaEspalda += '</div>';
			TablaEspalda +=  '<div class="card-content">';
			TablaEspalda += '<span class="card-title activator grey-text text-darken-4">'+val.musNombre+'<i class="material-icons right">more_vert</i></span>';
		 	TablaEspalda += '<p><a href="#">Ver Rutinas</a></p>';
			TablaEspalda += '</div>';
			TablaEspalda +='<div class="card-reveal">'
			TablaEspalda += '<span class="card-title grey-text text-darken-4">'+val.musNombre+'<i class="material-icons right">close</i></span>';
			TablaEspalda += '<p>'+val.ejmDescripcion+'</p>';
			TablaEspalda += '</div>';
			TablaEspalda += '</div>';
      TablaEspalda += '</div>';



    	});
    $('#TablaEspalda').html(TablaEspalda);
    })
    .fail(function() {
    	console.log("error");
    })
    //Piernas
     $.ajax({
    	url: '../controlador/Rutinas/CtrlConsultarPiernas.php',
    	type: 'POST',
    	dataType: 'JSON',
    	data: null,
    })
    .done(function(json) {
    	console.log("success");
    	var Tablapiernas ="";
    	$.each(json, function(index, val) {

			Tablapiernas +='<div class="col s4">';
			Tablapiernas +='<div class="card">';
			Tablapiernas += '<div class="card-image waves-effect waves-block waves-light">';
			Tablapiernas += '<img class="activator" <img src="../img/'+val.ejmFoto+'" width="380px" height="250px">';
			Tablapiernas += '</div>';
			Tablapiernas +=  '<div class="card-content">';
			Tablapiernas += '<span class="card-title activator grey-text text-darken-4">'+val.musNombre+'<i class="material-icons right">more_vert</i></span>';
		 	Tablapiernas += '<p><a href="#">Ver Rutinas</a></p>';
			Tablapiernas += '</div>';
			Tablapiernas +='<div class="card-reveal">'
			Tablapiernas += '<span class="card-title grey-text text-darken-4">'+val.musNombre+'<i class="material-icons right">close</i></span>';
			Tablapiernas += '<p>'+val.ejmDescripcion+'</p>';
			Tablapiernas += '</div>';
			Tablapiernas += '</div>';
			Tablapiernas += '</div>';


    	});
    $('#TablaPierna').html(Tablapiernas);
    })
    .fail(function() {
    	console.log("error");
    })


});
