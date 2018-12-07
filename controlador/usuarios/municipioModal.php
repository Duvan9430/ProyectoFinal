<?php 
	require_once '../Modelo/Conexion.php';
	require_once '../Modelo/municipioM.php';
	require_once '../Entidad/municipioE.php';


	$retorno = array('mensaje','arrayMunicipioModal');
	$municipioE=new MunicipioE();
	
	$municipioM = new MunicipioM();
	$resultado = $municipioM->consultarModal();
	$retorno["arrayMunicipioModal"] = $resultado->datos->fetchAll();

	unset($municipioM);
	unset($municipioE);
	echo json_encode($retorno);
?>