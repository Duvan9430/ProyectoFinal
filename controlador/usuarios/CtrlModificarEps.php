<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/usuarios/MdlEps.php';
	require_once '../../entidad/usuarios/EntEps.php';
	error_reporting(1);
	$retorno = array('mensaje');
	
	$entEps = new EntEps();
	$entEps->setIdEps($_POST['txtIdEpsModal']);
	$entEps->setEpsNombre($_POST['txtEpsNombreModal']);
	$entEps->setEpsCodigo($_POST['txtEpsCodigoModal']);


	$MdlEps = new MdlEps();
	$resultado = $MdlEps->updateEps($entEps);
	$retorno["mensaje"] = $resultado->mensaje;


	unset($entEps);
	unset($MdlEps);

	echo json_encode($retorno);
 ?>


 
