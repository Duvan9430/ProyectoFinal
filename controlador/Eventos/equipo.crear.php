<?php
	require_once'../../modelo/Eventos/conexion.php';
	require_once '../../entidad/Eventos/equipoE.php'; 
	require_once '../../modelo/Eventos/equipoM.php';

error_reporting(1);
$retorno = array('mensaje');

/*$idTorneo     = $_POST['sltTorneo'];
$nombreEquipo = $_POST['txtNombreEquipo'];*/

// $idTorneo='1';
// $nombreEquipo='casillas';
	
$equipoE= new Equipo();
$equipoE->setIdTorneo($_POST['sltTorneo']);
$equipoE->setEquNombre($_POST['txtNombreEquipo']);


$equipoM= new Equipos();
$resultado = $equipoM->crearEquipo($equipoE);
$retorno["mensaje"] = $resultado->mensaje;

unset($equipoE);
unset($equipoM);


echo json_encode($retorno);


?>