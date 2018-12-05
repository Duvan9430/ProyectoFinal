<?php  
require_once '../../entidad/Eventos/torneoE.php';
require_once '../../modelo/Eventos/torneoM.php';
require_once '../../modelo/Conexion.php';

$retorno = array('mensaje','arrayTorneo');
	$torneoE = new TorneoE();

	$torneoM = new TorneoM();
	$resultado = $torneoM->read();
	$retorno["arrayTorneo"] = $resultado->datos->fetchAll();

	unset($torneoM);
	unset($torneoE);

	echo json_encode($retorno);
?>