<?php  
	require_once'../../modelo/Conexion.php';
	require_once '../../modelo/Eventos/equipoM.php';
error_reporting(1);
$retorno = array("mensaje",'equipo');

	$equipoM = new Equipos();
	$resultado = $equipoM->deleteEquipo($_POST['txtIdEsquipo']);
	$retorno["equipo"]=$resultado->datos->fetchAll(PDO::FETCH_ASSOC);

	unset($equipoM);
	
	echo json_encode($retorno);
?>