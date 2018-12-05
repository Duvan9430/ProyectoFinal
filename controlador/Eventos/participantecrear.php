<?php

	require_once'../../modelo/Conexion.php';
	require_once '../../entidad/Eventos/participanteE.php'; 
	require_once '../../modelo/Eventos/participanteM.php';
error_reporting(1);

$retorno = array('mensaje');

$arrayIdParticipante = $_POST['arrayIdP'];
$idEquipo = $_POST['idEquipo'];


$participanteE= new participanteE();
$participanteE->setIdAprendiz($arrayIdParticipante);
$participanteE->setIdEquipo($idEquipo);


$participanteM= new participanteM();
$retorno["mensaje"] = $participanteM->insert_participante($participanteE);




echo json_encode($retorno);

unset($participanteE);
unset($participanteM);





?>