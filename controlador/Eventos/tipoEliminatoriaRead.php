<?php  
require_once '../../entidad/Eventos/tipoEliminatoriaE.php';
require_once '../../modelo/Eventos/tipoEliminatoriaM.php';
require_once '../../modelo/Conexion.php';

$retorno = array('mensaje','arrayTipoEliminatoria');
	$tipoEliminatoriaE = new TipoEliminatoriaE();
	$tipoEliminatoriaM = new TipoEliminatoriaM();
	$resultado = $tipoEliminatoriaM->read();
	$retorno["arrayTipoEliminatoria"]=$resultado->datos->fetchAll();

	unset($tipoEliminatoriaM);
	unset($tipoEliminatoriaE);

	echo json_encode($retorno);
?>