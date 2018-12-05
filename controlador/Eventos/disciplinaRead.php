<?php  
require_once '../../entidad/Eventos/disciplinaE.php';
require_once '../../modelo/Eventos/disciplinaM.php';
require_once '../../modelo/Conexion.php';

$retorno = array('mensaje','arrayDisciplina');
	$disciplinaE = new DisciplinaE();

	$disciplinaM = new DisciplinaM();
	$resultado = $disciplinaM->read();
	$retorno["arrayDisciplina"] = $resultado->datos->fetchAll();

	unset($disciplinaE);
	unset($disciplinaM);

	echo json_encode($retorno);

?>