<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/usuarios/municipioM.php';
	require_once '../../entidad/usuarios/municipioE.php';


	$retorno = array('mensaje','arrayMunicipioModal');
	$municipioE=new MunicipioE();
	
	$municipioM = new MunicipioM();
	$resultado = $municipioM->consultarModal();
	$retorno["arrayMunicipioModal"] = $resultado->datos->fetchAll();

	unset($municipioM);
	unset($municipioE);
	echo json_encode($retorno);
?>