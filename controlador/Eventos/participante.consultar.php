<?php
	require_once'../../modelo/Conexion.php';
	require_once '../../modelo/Eventos/participanteM.php'; 
	require_once '../../entidad/Eventos/participanteE.php';

	$retorno= array('arrayEquipo' => 'null');
	
		$participanteM= new ParticipanteM();  
		$resultado=$participanteM->readEquipo();
		$retorno['arrayEquipo'] = $resultado->datos->fetchAll();

echo json_encode($retorno);
  ?>