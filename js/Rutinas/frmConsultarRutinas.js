$(document).ready(function() {
	

	 $('.fixed-action-btn').floatingActionButton({
      direction: 'left',
      hoverEnabled: false
    });

    $('.tabs').tabs();

    $('.tooltipped').tooltip();

    $.ajax({
    	url: '../controlador/Rutinas/CtrlConsultarRutinasAprendiz.php',
    	type: 'POST',
    	dataType: 'JSON',
    	data: null,
    })
    .done(function(json) {
    	console.log("success");
    	var tablaPecho="";
        console.log(json);
    	$.each(json, function(index, val) {
	    	
			tablaPecho +='<div class="col s4">';
			tablaPecho +='<div class="card"> ';
			tablaPecho += '<div class="card-image waves-effect waves-block waves-light">';
			tablaPecho += '<img class="activator" <img src="../img/'+val.ejeImagen+'" width="380px" height="250px">';
			 tablaPecho += '</div>';
			tablaPecho +=  '<div class="card-content">';
			tablaPecho += '<span class="card-title activator grey-text text-darken-4">'+val.rutNombre+'<i class="material-icons right">more_vert</i></span>';
			tablaPecho += '</div>';
			tablaPecho +='<div class="card-reveal">'
			tablaPecho += '<span class="card-title grey-text text-darken-4">'+val.ejeNombre+'<i class="material-icons right">close</i></span>';
			tablaPecho += '<p>'+val.ejeDetalles+'</p>';
            tablaPecho += '<p> Series: '+val.series+'</p>';
            tablaPecho += '<p> Repeticiones: '+val.repeticiones+'</p>';
            tablaPecho += '<p> Tiempo: '+val.tiempo+'</p>';
            tablaPecho += '<div class ="card-action">';
            tablaPecho += '<p>Dia:'+val.diaNombre+'</p>';
            tablaPecho += '</div>';
    		tablaPecho += '</div>';
			tablaPecho += '</div>';
            tablaPecho += '</div>';
		
					
    	});
    $('#TablaRutinas').html(tablaPecho);
    })
    .fail(function(json) {
    	console.log(json);
    })
 
 	
 	
});