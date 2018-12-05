$(document).ready(function(){

    $(document).on('click', '#btnGimnasioF', function(){
      $('#contenido').load('../vista/gimnasios/crearGimnasioFrm.php');
      $.ajax({

      })
      .done(function() {
        console.log("success");
      })
      .fail(function() {
        console.log("error");
      })
    })

    $(document).on('click', '#btnMaquinaF', function(){
      $('#contenido').load('../vista/gimnasios/crearMaquinaFrm.php');
      $.ajax({

      })
      .done(function() {
        console.log("success");
      })
      .fail(function() {
        console.log("error");
      })
    })
  })