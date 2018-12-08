<?php
	require_once'../../modelo/Eventos/conexion.php';
	require_once '../../entidad/Eventos/equipoE.php'; 
	require_once '../../modelo/Eventos/equipoM.php';

	$retorno= array('arrayTorneo' => 'null');
	
	$equipoM= new Equipos();  
	$resultado=$equipoM->readTorneo();
	$retorno['arrayTorneo'] = $resultado->datos->fetchAll();
echo json_encode($retorno);
  ?>