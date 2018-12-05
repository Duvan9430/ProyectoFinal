<?php 
	require_once '../../modelo/conexion.php';
	require_once '../../modelo/gimnasios/mdlMaquina.php';
	error_reporting(1);
	$retorno = array('mensaje','maquinas');
	
	
	
	$MdlMaquina = new MdlMaquina();
	$resultado = $MdlMaquina->consultarModal($_POST['idMaquina']);
	$retorno["mensaje"] = $resultado->mensaje;
	 $retorno ["maquinas"]=$resultado->datos->fetchAll(PDO::FETCH_ASSOC);

	unset($entMaquina);
	unset($MdlMaquina);

	echo json_encode($retorno);
 ?>