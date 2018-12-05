<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/usuarios/MdlEps.php';
	error_reporting(1);
	$retorno = array('mensaje','epss');
	
	$MdlEps = new MdlEps();
	$resultado = $MdlEps->consultarModal($_POST['idEps']);
	$retorno["mensaje"] = $resultado->mensaje;
	$retorno ["epss"]=$resultado->datos->fetchAll(PDO::FETCH_ASSOC);


	echo json_encode($retorno);
 ?>