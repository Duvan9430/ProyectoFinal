<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/Rutinas/modeloP.php';

	$retorno = array();
	$ModeloM= new Modelo();
	$resultado = $ModeloM->ConsultarPersonasDeAsistencia();

	$retorno = $resultado->datos->fetchAll();

	echo json_encode($retorno);
 ?>