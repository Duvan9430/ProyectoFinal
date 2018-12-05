<?php  
require_once '../../entidad/Eventos/generoTorneoE.php';
require_once '../../modelo/Eventos/generoTorneoM.php';
require_once '../../modelo/Conexion.php';

$retorno = array('mensaje','arrayGeneroTorneo');
	$generoTorneoE = new GeneroTorneoE();

	$generoTorneoM = new GeneroTorneoM();
	$resultado = $generoTorneoM->read();
	$retorno["arrayGeneroTorneo"] = $resultado->datos->fetchAll();

	unset($generoTorneoM);
	unset($generoTorneoE);

	echo json_encode($retorno);
?>