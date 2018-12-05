var arrayIdParticipante = new Array();
var arrayCompletar = new Array();
var indice ='';
var cont = "";
var numeroParticipante="";
$(function() {
     M.AutoInit();
   });
  
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
  });
 // Or with jQuery
    $(document).ready(function(){
        $('.modal').modal();
  });

  // Or with jQuery.

 function log( message ) {
      $( "<div>" ).text( message ).prependTo( "#log" );
      $( "#log" ).scrollTop( 0 );
		
    }
$(document).ready(function(){
	
	function consultarParticipante() {
		$.ajax({
			url: '../controlador/Eventos/participante.consultar.php',
			type: 'POST',
			dataType: 'json',
			data: null,
		})
		.done(function(json) {
			console.log("success");
			var option = null;
			option = '<option value="" disabled selected >Seleccione el Equipo</option>';
			$.each(json.arrayEquipo,function(index, val) {
				option += '<option value='+val.idEquipo+'>'+val.equNombre+'</option>';
			});
			$('#sltEquipo').html(option);
		})
		.fail(function() {
			console.log("error");
		});	
	}
	consultarParticipante();


    
	$( '#txtParticipante').autocomplete({
      minLength: 0,
      source: '../controlador/Eventos/generoConsultaAutocompletar.php',
      focus: function( event, ui ) {
        $( '#txtParticipante' ).val( ui.item.label );
      
      },
      select: function( event, ui ) {
        $( '#txtParticipante').val( ui.item.label );
        $( '#txtParticipante' ).val( ui.item.value );
       var completar = new Array();
        completar[0] = ui.item.id;
        completar[1] = ui.item.tipoIdentificacion;
        completar[2] = ui.item.nit;
        completar[3] = ui.item.value;
        completar[4] = ui.item.ficha;
       // console.log(completar);
        var tabla="";
 		var id="";
 		id=ui.item.id;
        console.log(id);
        console.log(arrayIdParticipante);
        if(arrayIdParticipante==''){
        	cont=1;
           
      }else{
      	for (var i = 0; i <= arrayIdParticipante.length; i++) {
      	 	if(id==arrayIdParticipante[i]){
       			cont = 0;
       			i= arrayIdParticipante.length;		
			}else{	
				cont = 1;	
			}
      	 } 
       
      }
       if(cont==0){
        	M.toast({html: 'ya existe'});
			
        }else{
        	var indice= document.getElementById("sltEquipo").selectedIndex;
			console.log(indice);
			if(indice == "" || indice == 0){
				if(indice == "" || indice == 0 ){
					M.toast({html: 'Seleccione Equipo'});

				}
			}else{
				if(indice>0){
					document.getElementById("sltEquipo").disabled = true;
					if(arrayIdParticipante.length==numeroParticipante){
	        			M.toast({html: 'Ah excedido el limite de participantes'});
			    		}else{
			    		arrayCompletar.push(completar);
				    	arrayIdParticipante.push(ui.item.id);
				    	console.log(arrayIdParticipante);
				    	cargartabla();
			    	}

				}
			    
        	}   
  		}
	}
    })

	$(document).on('click','#btnCrear',function(){
		var indice= document.getElementById("sltEquipo").selectedIndex;
		console.log(indice);
		if(indice == "" || indice == 0){
			if(indice == "" || indice == 0 ){
				M.toast({html: 'Seleccione Equipo'});
			}
		}else{
			
			$.ajax({
			url: '../controlador/Eventos/participantecrear.php',
			type: 'POST',
			dataType: 'JSON',
			data: {arrayIdP: arrayIdParticipante,
				   idEquipo: $("#sltEquipo").val(), 

				  }

		})
		.done(function(json) {
			M.toast({html: 'Registro Exitoso'});
			document.getElementById("sltEquipo").disabled = false;
			cargartabla();
			console.log("success");

		})
		.fail(function() {
			console.log("error");
		})	

		}	
	})

});


function cargartabla(){
var tabla="";
for (i=0;i<arrayCompletar.length;i++){ 
   			log(tabla += '<tr>');
   			log(tabla += "<td><input type='text' name='indice' id='indice"+i+"' value='"+i+"' hidden></input>"+i+"</td>");
   		for (j=1;j<arrayCompletar[i].length;j++){ 
      		log(tabla += "<td>" + arrayCompletar[i][j] + "</td>");
   			} 
   			indice= i;
   			log(tabla+='<td> <a href="#modalEliminar" class="btn modal-trigger" class="waves-effect waves-light btn" data-toggle="modal"  id="btnCargarModalEliminar" >Eliminar</td>');
   			//log(tabla+= '<a href="#modalEliminar" onclick="borrar('+i+')" class="btn modal-trigger" class="waves-effect waves-light btn" data-toggle="modal"  id="btnCargarModalEliminar" style="background-color: #fc7323;"><i class="material-icons right icon-black">delete</i></a></td>');
   		log(tabla += '</tr>');
   		}
   		console.log(arrayCompletar);


   		$('#participante').html(tabla);


}

$(document).on('click','#btnEliminar',function(){

		//$('#modal').modal();
		console.log(arrayIdParticipante);
		//unset($array[ind]);
		arrayIdParticipante.splice(indice,1);
		arrayCompletar.splice(indice,1);	
		//alert("ElementoEliminado"+eliminado);
		console.log(arrayIdParticipante);
		console.log(arrayCompletar);
		$('#bodyparticipante').remove();
		cargartabla();
		$('#modalEliminar').modal('close');
	
  

});
	function consultarNumeroParticipante(idEquipo){
		$.ajax({
			url: '../controlador/Eventos/consultarNumeroParticipante.php',
			type: 'POST',
			dataType: 'json',
			data: {idEquipo: idEquipo},
		})
		.done(function(json) {
			
			numeroParticipante=json.participante[0].disNumeroParticipantes
			console.log(numeroParticipante);
		})
		.fail(function() {
			console.log("error");
		})
		
		
	}
$("#sltEquipo").change(function() {
	consultarNumeroParticipante($("#sltEquipo").val());
});
