<?php  
require_once '../../modelo/Eventos/torneoM.php';
require_once '../../modelo/Eventos/conexion.php';
error_reporting(1);
$retorno = array('mensaje','torneo');

	$torneoM = new TorneoM();
	$resultado = $torneoM->readModal($_POST['idTorneo']);
	$retorno["torneo"]=$resultado->datos->fetchAll(PDO::FETCH_ASSOC);
	
	unset($torneoM);
	unset($torneoE);

	echo json_encode($retorno);
?>