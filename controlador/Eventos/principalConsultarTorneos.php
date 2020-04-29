<?php  
//require_once 'torneoE.php';
require_once '../../modelo/Eventos/torneoM.php';
require_once '../../modelo/Conexion.php';

$retorno = array('mensaje','arrayTorneo');
	//$torneoE = new TorneoE();

	$torneoM = new TorneoM();
	$resultado = $torneoM->readTorneoPrincipal();
	$retorno["arrayTorneo"] = $resultado->datos->fetchAll(PDO::FETCH_ASSOC);

	unset($torneoM);
	unset($torneoE);

	echo json_encode($retorno);
?>