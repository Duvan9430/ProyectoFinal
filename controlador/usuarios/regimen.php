<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/usuarios/regimenM.php';
	require_once '../../entidad/usuarios/regimenE.php';


	$retorno = array('mensaje','arrayRegimen');
	$regimenE=new RegimenE();
	
	$regimenM = new RegimenM();
	$resultado = $regimenM->consultar();
	$retorno["arrayRegimen"] = $resultado->datos->fetchAll();

	unset($regimenM);
	unset($regimenE);
	echo json_encode($retorno);
?>