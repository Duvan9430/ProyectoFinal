<?php  

require_once'../../modelo/Conexion.php';
require_once '../../entidad/Eventos/equipoE.php'; 
require_once '../../modelo/Eventos/equipoM.php';
	$retorno = array('arrayEquipo' => null,);

$equipoM= new Equipos();
	$resultado=$equipoM->readEquipo();
	$retorno['arrayEquipo']=$resultado->datos->fetchAll();

	echo json_encode($retorno);
?>