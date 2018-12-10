<?php

	require_once '../../modelo/conexion.php';
	require_once '../../modelo/Rutinas/RutinasM.php';
	require_once '../../entidad/Rutinas/RutinaVista.php';

error_reporting(1);

  $idRutina=$_POST['idRutina'];
	$retorno = array();

	$entidad= new RutinaVista();
	$entidad->setIdRutina(20);
	$modelos = new Rutina();

	$resultado = $modelos->lista($entidad);
	$retorno = $resultado->datos->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($retorno);

 ?>
