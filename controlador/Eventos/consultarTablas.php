<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../entidad/Eventos/participanteE.php';
	require_once '../../modelo/Eventos/participanteM.php';

	$retorno = array('array' => null, 'mensaje' => null, 'estado' => null);

	$participanteE = new ParticipanteE();
	$participanteE->setIdAprendiz();
	$participanteE->setIdEquipo();

	$participanteM = new ParticipanteM();
	$resultado= $participanteM->select_tablas();
	$retorno["arrayParticipante"]=$resultado->datos->fetchAll();

	unset($participanteE);
	unset($participanteM);
	echo json_encode($retorno);
?>