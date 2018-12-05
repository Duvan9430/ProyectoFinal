<?php 
	require_once '../../modelo/Rutinas/modeloP.php';
	require_once '../../modelo/Conexion.php';

	$retorno = array();

	$modeloI = new Modelo();
	
	$retorno= $modeloI->ConsultarReportePersonasSaludable();

	//$retorno = $resultadoSaludable->datos;

echo json_encode($retorno);
 ?>