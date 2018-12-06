<?php 
	require_once '../Modelo/Conexion.php';
	require_once '../Modelo/areaM.php';
	require_once '../Entidad/areaE.php';


	$retorno = array('mensaje','arrayArea');
	$areaE=new AreaE();
	
	$areaM = new AreaM();
	$resultado = $areaM->consultar();
	$retorno["arrayArea"] = $resultado->datos->fetchAll();

	unset($areaM);
	unset($areaE);
	echo json_encode($retorno);
?>