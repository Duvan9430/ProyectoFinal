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
    	$.each(json, function(index, val) {
	        
			tablaPecho +='<div class="col s4">';
			tablaPecho +='<div class="card"> ';
			tablaPecho += '<div class="card-image waves-effect waves-block waves-light">';
			tablaPecho += '<img class="activator" <img src="../img/'+val.ejmFoto+'" width="380px" height="250px">';
			tablaPecho += '</div>';
			tablaPecho +=  '<div class="card-content">';
			tablaPecho += '<span class="card-title activator grey-text text-darken-4">'+val.musNombre+'<i class="material-icons right">more_vert</i></span>';
		 	tablaPecho += '<p><a href="#">Ver Rutinas</a></p>';
			tablaPecho += '</div>';
			tablaPecho +='<div class="card-reveal">'
			tablaPecho += '<span class="card-title grey-text text-darken-4">'+val.musNombre+'<i class="material-icons right">close</i></span>';
			tablaPecho += '<p>'+val.ejmDescripcion+'</p>';
			tablaPecho += '</div>';
			tablaPecho += '</div>';
            tablaPecho += '</div>';
		
					
    	});
    $('#TodoRutina').html(tablaPecho);
    })
    .fail(function() {
    	console.log("error");
    }) 	
 	
});