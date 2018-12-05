$(document).ready(function(){
	//Barra de Navegacion Fija 
 selectClasificacion();


var categories = $('nav .categories-container');

   if (categories.length) {
     categories.pushpin({ top: categories.offset().top });
     var $links = categories.find('li');
     $links.each(function() {
       var $link = $(this);
       $link.on('click', function() {
         $links.removeClass('active');
         $link.addClass('active');
         var hash = $link.find('a').first()[0].hash.substr(1);

         $('.gallery .gallery-expand')
           .addClass('gallery-filter')
           .stop()
           .fadeIn(100);
         if (hash !== 'all') {
           console.log($('.gallery .gallery-expand').not('.' + hash));
           $('.gallery .gallery-expand').not('.' + hash)
             .hide()
             .removeClass('gallery-filter');
         }

         // transition layout
         $masonry.masonry({
           transitionDuration: '.3s'
         });
         // only animate on layout
         $masonry.one( 'layoutComplete', function( event, items ) {
           $masonry.masonry({
             transitionDuration: 0
           });
         });
         $masonry.masonry('layout');
       });
     });
   }
  $('select').formSelect(); 

  function selectClasificacion(){
    $.ajax({
      url: '../../controlador/Rutinas/crtlConsultarClasificacion.php',
      type: 'POST',
      dataType: 'json',
      data: null,
    })
    .done(function(retorno) {
      var clasificacion = "";

      clasificacion+="<label>Clasificación:</label>";
      clasificacion+="<select class='browser-default' name='idClasificacionRutina'>";
      clasificacion+="<option disabled selected>Seleccione</option>";
      $.each(retorno, function(index, val) {
        clasificacion+="<option value="+val.idClasificacionRutina+">"+val.clrNombre+"</option>";
      });
      clasificacion+=" </select>";
      $("#selectClasificacion").html(clasificacion);
    })
    .fail(function(retorno) {
      console.log(retorno);
    });
    
  }
  
  $("#btnCrearRutina").click(function(){
    $.ajax({
      url: '../../controlador/Rutinas/crtlCrearRutina.php',
      type: 'POST',
      dataType: 'json',
      data: $("#frmCrearRutinas").serialize(),
    })
    .done(function(retorno) {
      M.toast({html: retorno.mensaje});
    })
    .fail(function(retorno) {
      console.log(retorno);
    })
    
  }) 
  cargarEjercicios();
  function cargarEjercicios(){
    $.ajax({
      url: '../../controlador/Rutinas/CtrlConsultarEjercicio.php',
      type: 'POST',
      dataType: 'json',
      data: null,
    })
    .done(function(retorno) {
      var option = "";
      $.each(selectEjercicios, function(index, val) {
        option =+ "<option value="+val.idEjercicio+">"+val.ejeNombre+"</option>";
      });
      console.log(retorno);
      $("#selectEjercicios").html(option);
    })
    .fail(function() {
      console.log("error");
    })    
  }  

})