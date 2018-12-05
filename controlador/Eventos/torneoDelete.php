<?php  
require_once '../../modelo/Eventos/torneoM.php';
require_once '../../modelo/Conexion.php';
error_reporting(1);
$retorno = array('mensaje');

	$torneoM = new TorneoM();
	$resultado = $torneoM->deleteTorneo($_POST['txtIdTorneoModal']);
	$retorno["torneo"]=$resultado->mensaje;

	unset($torneoM);
	unset($torneoE);
	echo json_encode($retorno);
?>