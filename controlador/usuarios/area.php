<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/usuarios/areaM.php';
	require_once '../../entidad/usuarios/areaE.php';


	$retorno = array('mensaje','arrayArea');
	$areaE=new AreaE();
	
	$areaM = new AreaM();
	$resultado = $areaM->consultar();
	$retorno["arrayArea"] = $resultado->datos->fetchAll();

	unset($areaM);
	unset($areaE);
	echo json_encode($retorno);
?>