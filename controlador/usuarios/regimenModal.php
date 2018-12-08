<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/usuarios/regimenM.php';
	require_once '../../entidad/usuarios/regimenE.php';


	$retorno = array('mensaje','arrayRegimenModal');
	$regimenE=new RegimenE();
	
	$regimenM = new RegimenM();
	$resultado = $regimenM->consultarModal();
	$retorno["arrayRegimenModal"] = $resultado->datos->fetchAll();

	unset($regimenM);
	unset($regimenE);
	echo json_encode($retorno);
?>