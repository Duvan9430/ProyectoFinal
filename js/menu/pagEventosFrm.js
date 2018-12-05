
$(document).on("click","#btnTorneoF",function(){
   $("#contenido").load("../vista/Eventos/crearTorneoFrm.php");
})

$(document).on("click","#btnEquipoF",function(){
   $("#contenido").load("../vista/Eventos/equipoFrm.php");
})

$(document).on("click","#btnEliminatoriasF",function(){
   $("#contenido").load("../vista/Eventos/eliminatoriasFrm.php");
})

$(document).on("click","#btnParticipantesF",function(){
   $("#contenido").load("../vista/Eventos/participanteFrm.php");
})
