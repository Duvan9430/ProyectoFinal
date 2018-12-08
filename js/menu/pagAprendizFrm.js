
$(document).on("click","#btnCrearEps",function(){
   $("#contenido").load("../vista/usuarios/crearEpsFrm.php");
})

$(document).on("click","#btnCrearFicha",function(){
   $("#contenido").load("../vista/usuarios/modalFichaFrm.php");
})

$(document).on("click","#btnCrearDocumento",function(){
   $("#contenido").load("../vista/usuarios/modalTipoDocumentoFrm.php");
})

$(document).on("click","#btnCrearPersona",function(){
   $("#contenido").load("../vista/usuarios/crearPersonaFrm.php");
})
