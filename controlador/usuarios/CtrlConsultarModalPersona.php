<?php 
	require_once '../Modelo/Conexion.php';
	require_once '../Modelo/MdlPersona.php';
	error_reporting(1);
	$retorno = array('mensaje','personas');
	
	
	
	$MdlPersona = new MdlPersona();
	$resultado = $MdlPersona->consultarModal($_POST['idPersona']);
	$retorno["mensaje"] = $resultado->mensaje;
	 $retorno ["personas"]=$resultado->datos->fetchAll(PDO::FETCH_ASSOC);

	unset($entPersona);
	unset($MdlPersona);

	echo json_encode($retorno);
 ?>