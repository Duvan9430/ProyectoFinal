<?php  
require_once '../../entidad/Eventos/clasificacionTorneoE.php';
require_once '../../modelo/Eventos/clasificacionTorneoM.php';
require_once '../../modelo/Eventos/conexion.php';

$retorno = array('mensaje','arrayClasificacionTorneo');
	$clasificacionTorneoE = new ClasificacionTorneoE();

	$clasificacionTorneoM = new ClasificacionTorneoM();
	$resultado = $clasificacionTorneoM->read();
	$retorno["arrayClasificacionTorneo"] = $resultado->datos->fetchAll();

	unset($clasificacionTorneoM);
	unset($clasificacionTorneoE);

	echo json_encode($retorno);
?>