$(document).ready(function(){
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

    
  if(sessionStorage.getItem('pagina') != null ){
    $("#contenido").load(sessionStorage.getItem('pagina'));
  }else{
    $("#contenido").load('../vista/menus/inicioFrm.php');
  }

	$(document).on('click', '#btnAprendiz', function(){
    	location.reload();
		$('#contenido').load('../vista/menus/pagAprendizFrm.php');
    	sessionStorage.setItem('pagina','../vista/menus/pagAprendizFrm.php');
	})
	$(document).on('click', '#btnGimnasio', function(){
		location.reload();
		$('#contenido').load('../vista/menus/pagGimnasioFrm.php');
    	sessionStorage.setItem('pagina','../vista/menus/pagGimnasioFrm.php');
	})
	$(document).on('click', '#btnEventos', function(){
		location.reload();
		$('#contenido').load('../vista/menus/pagEventosFrm.php');
    	sessionStorage.setItem('pagina','../vista/menus/pagEventosFrm.php');
	})

	$(document).on('click', '#btnControl', function(){
		location.reload();
		$('#contenido').load('../vista/menus/pagControlFrm.php');
		sessionStorage.setItem('pagina','../vista/menus/pagControlFrm.php');
	})

	//menu control

  $('.sidenav').sidenav({
    edge:'left',
    inDuration: 150,
    outDuration: 150
  });

  $('.collapsible').collapsible();

  $(document).on("click","#btnCerrarSesionM",function(){
    sessionStorage.clear();
  })

});
