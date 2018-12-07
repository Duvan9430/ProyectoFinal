<?php 
	require_once '../Modelo/Conexion.php';
	require_once '../Modelo/regimenM.php';
	require_once '../Entidad/regimenE.php';


	$retorno = array('mensaje','arrayRegimenModal');
	$regimenE=new RegimenE();
	
	$regimenM = new RegimenM();
	$resultado = $regimenM->consultarModal();
	$retorno["arrayRegimenModal"] = $resultado->datos->fetchAll();

	unset($regimenM);
	unset($regimenE);
	echo json_encode($retorno);
?>