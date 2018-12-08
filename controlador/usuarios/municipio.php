<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/usuarios/municipioM.php';
	require_once '../../entidad/usuarios/municipioE.php';

	$retorno = array('mensaje','arrayMunicipio');
	$municipioE=new municipioE();
	
	$municipioM = new municipioM();
	$resultado = $municipioM->consultarModal();
	$retorno["arrayMunicipio"] = $resultado->datos->fetchAll();

	unset($municipioM);
	unset($municipioE);
	echo json_encode($retorno);

?>