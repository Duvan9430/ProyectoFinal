$(document).ready(function() {


	 $('.fixed-action-btn').floatingActionButton({
      direction: 'left',
      hoverEnabled: false
    });

    $('.tabs').tabs();

    $('.tooltipped').tooltip();

    $.ajax({
    	url: '../controlador/Rutinas/ejerciciosPecho.php',
    	type: 'POST',
    	dataType: 'JSON',
    	data: null,
    })
    .done(function(json) {
    	console.log("success");
    	var tablaPecho="";
    	$.each(json, function(index, val) {

			tablaPecho +='<div class="col s4">';
			tablaPecho +='<div class="card"> ';
			tablaPecho += '<div class="card-image waves-effect waves-block waves-light">';
			tablaPecho += '<img class="activator" <img src="../img/'+val.ejeImagen+'" width="380px" height="250px">';
			 tablaPecho += '</div>';
			tablaPecho +=  '<div class="card-content">';
			tablaPecho += '<span class="card-title activator grey-text text-darken-4">'+val.ejeNombre+'<i class="material-icons right">more_vert</i></span>';
			tablaPecho += '</div>';
			tablaPecho +='<div class="card-reveal">'
			tablaPecho += '<span class="card-title grey-text text-darken-4">'+val.ejeNombre+'<i class="material-icons right">close</i></span>';
			tablaPecho += '<p>'+val.ejeDetalles+'</p>';
			tablaPecho += '</div>';
			tablaPecho += '</div>';
      tablaPecho += '</div>';


    	});
    $('#TablaPecho').html(tablaPecho);
    })
    .fail(function(retorno) {
    	console.log(retorno);
    })
    //Espalda
     $.ajax({
    	url: '../controlador/Rutinas/ejerciciosEspalda.php',
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
			TablaEspalda += '<img class="activator" <img src="../img/'+val.ejeImagen+'" width="380px" height="250px">';
			TablaEspalda += '</div>';
			TablaEspalda +=  '<div class="card-content">';
			TablaEspalda += '<span class="card-title activator grey-text text-darken-4">'+val.ejeNombre+'<i class="material-icons right">more_vert</i></span>';
			TablaEspalda += '</div>';
			TablaEspalda +='<div class="card-reveal">'
			TablaEspalda += '<span class="card-title grey-text text-darken-4">'+val.ejeNombre+'<i class="material-icons right">close</i></span>';
			TablaEspalda += '<p>'+val.ejeDetalles+'</p>';
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
    	url: '../controlador/Rutinas/ejerciciosPierna.php',
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
			Tablapiernas += '<img class="activator" <img src="../img/'+val.ejeImagen+'" width="380px" height="250px">';
			Tablapiernas += '</div>';
			Tablapiernas +=  '<div class="card-content">';
			Tablapiernas += '<span class="card-title activator grey-text text-darken-4">'+val.ejeNombre+'<i class="material-icons right">more_vert</i></span>';
		 	Tablapiernas += '<p><a href="#">Ver Rutinas</a></p>';
			Tablapiernas += '</div>';
			Tablapiernas +='<div class="card-reveal">'
			Tablapiernas += '<span class="card-title grey-text text-darken-4">'+val.ejeNombre+'<i class="material-icons right">close</i></span>';
			Tablapiernas += '<p>'+val.ejeDetalles+'</p>';
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
