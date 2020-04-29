$(document).ready(function(){
    $('a').one('click', function(event) {
        if(this.hash !== ""){
            event.preventDefault();
            
            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top}, 800, function(){
                    window.location.hash = hash;
            });
        }
    });
    $('#asistencia').one('click', function() {
        window.open('vista/Rutinas/registroAsistenciaFrm.php');
    });
    $('.slider').slider({
    	indicators: false
    });
    $('.tooltipped').tooltip();
    $('.parallax').parallax();

    $('.carousel.carousel-slider').carousel({
      fullWidth: true,
      indicators: false
    });

    $('.fixed-action-btn').floatingActionButton();
    $('.modal').modal();

    M.AutoInit();

});