<?php 
	require_once '../Modelo/Conexion.php';
	require_once '../Modelo/municipioM.php';
	require_once '../Entidad/municipioE.php';

	$retorno = array('mensaje','arrayMunicipio');
	$municipioE=new municipioE();
	
	$municipioM = new municipioM();
	$resultado = $municipioM->consultarModal();
	$retorno["arrayMunicipio"] = $resultado->datos->fetchAll();

	unset($municipioM);
	unset($municipioE);
	echo json_encode($retorno);

?>