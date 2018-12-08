$(document).ready(function(){
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