<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/usuarios/MdlEps.php';
	require_once '../../entidad/usuarios/EntEps.php';
	error_reporting(1);
	$retorno = array('mensaje');
	$entEps = new EntEps();
	$entEps->setEpsNombre($_POST['txtEpsNombre']);
	$entEps->setEpsCodigo($_POST['txtEpsCodigo']);
	$entEps->setUsuarioCreacion(-1);
	$entEps->setUsuarioModificacion(-1);


	$MdlEps = new MdlEps();
	$resultado = $MdlEps->createEps($entEps);
	$retorno["mensaje"] = $resultado->mensaje;

	unset($entEps);
	unset($MdlEps);

	echo json_encode($retorno);
 ?>