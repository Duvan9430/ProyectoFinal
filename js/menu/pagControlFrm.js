
$(document).on("click","#btnCorreoM",function(){
   $("#contenido").load("../vista/Rutinas/CorreoFrm.php");
})

$(document).on("click","#btnAsisMaqM",function(){
   $("#contenido").load("../vista/Rutinas/GenerarReportesFrm.php");
})

$(document).on("click","#btnEstadisticaM",function(){
   $("#contenido").load("../vista/Rutinas/IndiceMasaFrm.php");
})

$(document).on("click","#btnIMCM",function(){
   $("#contenido").load("../vista/Rutinas/ReporteEstadisticaFrm.php");
})

$(document).on("click","#btnEjerciciosM",function(){
	$("#contenido").load("../vista/Rutinas/ejercicioFrm.php");
})

$(document).on("click","#btnMusculoM",function(){
	$("#contenido").load("../vista/Rutinas/musculoFrm.php");
})

$(document).on("click","#btnEjerMusM",function(){
	$("#contenido").load("../vista/Rutinas/ejercicioMusculoFrm.php");
})