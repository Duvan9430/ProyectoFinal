<?php  
	require_once'../../modelo/Conexion.php';
	require_once '../../entidad/Eventos/equipoE.php';
	require_once '../../modelo/Eventos/equipoM.php';
error_reporting(1);
$retorno = array("mensaje",'equipo');

	$equipoE= new Equipo();
	$equipoE->setIdEquipo($_POST['txtIdEsquipo']);
	$equipoE->setIdTorneo($_POST['slttorneo']);
	$equipoE->setEquNombre($_POST['txtNombreequipo']);

	$equipoM = new Equipos();
	$resultado = $equipoM->updateEquipo($equipoE);
	$retorno["equipo"]=$resultado->datos->fetchAll(PDO::FETCH_ASSOC);

	unset($equipoE);
	unset($equipoM);
	
	echo json_encode($retorno);
?>