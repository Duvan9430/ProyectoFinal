document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
//Modal



$(document).ready(function(){
  $(".modalMediano").modalMediano();
  form();
  tablaClasificacionRutina();
  function form() {
    $("#formulari").load("clasificacionRutinaCreateFrm.php")
  }



/////////////////////////////////
$(document).on('click','#btnGuardar',function(){

  var nombre=$('#txtNombre').val();
  var descripcion=$('#txtDescripcion').val();
  //alert(nombre+"----->"+descripcion);
  var formulario = new FormData($('#clasificaciorutinafrm')[0]);
  if((nombre=="") || (descripcion=="")){
    alert("Campos vacios");
  }
  else{
    $.ajax({
    url: '../../controlador/Rutinas/clasificacioRutinaCreate.php',
    type: 'POST',
    dataType: 'JSON',
    data: formulario,
    cache: false,
    contentType: false,
    processData: false,
    })
    .done(function(json) {
      console.log(json);
      tablaClasificacionRutina();
    })
    .fail(function(retorno) {
      console.log(retorno);
    });
}



});

/////////////////////////////////
/*Tabla ClasificacionRutina*/
function tablaClasificacionRutina(){
  $.ajax({
    url: '../../controlador/Rutinas/clasificacionRutinaRead.php',
    type: 'POST',
    dataType: 'json',
    data: null,
  })
  .done(function(json) {
    var tabla = '';

    $.each(json.arrayClasificacionRutina, function(index, val) {
      tabla += '<tr>';
      tabla += 	'<td>'+val.clrNombre+'</td>';
      tabla += 	'<td>'+val.clrDescripcion+'</td>';
      tabla += '</tr>';
    });

    $('#tblClasificacionRutina').html(tabla);

    console.log(json);
    console.log("tabla cargada");
  })
  .fail(function(retorno) {
    console.log(retorno);
  });

}
/*Fin Tabla*/
});
