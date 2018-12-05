<?php  
	require_once'../../modelo/Conexion.php';
	require_once '../../modelo/Eventos/participanteM.php';
error_reporting(1);
$retorno = array('participante');

	$participanteM = new participanteM();
	$resultado = $participanteM->readNumeroParticipante($_POST['idEquipo']);
	$retorno["participante"]=$resultado->datos->fetchAll(PDO::FETCH_ASSOC);

	unset($participanteM);
	
echo json_encode($retorno);
?>