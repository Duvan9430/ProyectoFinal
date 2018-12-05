$(document).ready(function(){
	
	//Barra de Navegacion Fija 
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

    $("#btnEnviarCorreo").click(function(){

      if($("#Asunto").val().length > 0 && $("#Descripcion").val().length > 0){

        var formData = new FormData($("#frmEnvioCorreo")[0]);

        $("#btnEnviarCorreo").hide();
        $("#Cargando").show();

        $.ajax({
          url: '../controlador/Rutinas/CtrlEnviarCorreo.php',
          type: 'POST',
          dataType: 'json',
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
        })
        .always(function(retorno){
          $("#Cargando").hide();
          $("#btnEnviarCorreo").show();

          if(retorno.estado == null){
            console.log(retorno);
            M.toast({html: "Error al enviar mensaje"});
          }else{
            M.toast({html: retorno.estado});
          }

          

        })
        return false;
      }
      else{
        M.toast({html: 'Por favor escribe el Asunto del Correo'});
        M.toast({html: 'Por favor escribe la Descripcion del Correo'});
      }

    })

    $(document).on("change","#Archivo",function(){
      var archivos = $('#Archivo').get(0).files;
      var tamaño = 0;
      var extension = "";

      $.each(archivos, function(index, archivo) {
        tamaño += archivo.size;
        console.log('name : ' + archivo.name + ' --- ', 'size : ' + archivo.size);
      });

      $.each(archivos,function(index,archivo){
        extension = archivo.name.substring(archivo.name.lastIndexOf('.')).toLowerCase();
        if(extension == ".mp3" || extension == ".wav" || extension == ".ogg" || extension== ".mp4" || extension == ".avi"  || extension == ".flv"){
          M.toast({html: "Archivos de audio o video no soportados"});
          $('#Info_Archivo').val('');
          $("#Archivo").val('');
          return false;
        }
      })

      if(tamaño > 8388608){
        M.toast({html: "El tamaño maximo de archivos es de 8MB"});
        $('#Info_Archivo').val('');
        $("#Archivo").val('');
      }
      
    })

    
});
   
 