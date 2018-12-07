<?php 
	require_once '../Modelo/Conexion.php';
	require_once '../Modelo/regimenM.php';
	require_once '../Entidad/regimenE.php';


	$retorno = array('mensaje','arrayRegimen');
	$regimenE=new RegimenE();
	
	$regimenM = new RegimenM();
	$resultado = $regimenM->consultar();
	$retorno["arrayRegimen"] = $resultado->datos->fetchAll();

	unset($regimenM);
	unset($regimenE);
	echo json_encode($retorno);
?>