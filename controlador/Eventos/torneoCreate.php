<?php 

require_once '../../modelo/Eventos/torneoM.php';
require_once '../../entidad/Eventos/torneoE.php';
require_once '../../modelo/Eventos/conexion.php';

error_reporting(1);
$retorno = array('mensaje');

	$torneoE = new TorneoE();
	$torneoE->setIdClasificacionTorneo($_POST['sltClasificacionTorneo']);
	$torneoE->setIdDisciplina($_POST['sltDisciplina']);
	$torneoE->setIdLugar($_POST['sltLugar']);
	$torneoE->setIdGeneroTorneo($_POST['sltGeneroTorneo']);
	$torneoE->setIdEncargado(1);
	$torneoE->setIdTipoEliminatoria($_POST['sltTipoEliminatoria']);
	$torneoE->setTorNombre($_POST['txtNombreTorneo']);
	$torneoE->setTorFechaInicio($_POST['txtFechaInicio']);
	$torneoE->setTorFechaFin($_POST['txtFechaFin']);
	$torneoE->setTorNumeroEquipos($_POST['txtNumeroEquipos']);
	$torneoM = new TorneoM();
	$resultado = $torneoM->create($torneoE);
	$retorno['mensaje'] = $resultado->mensaje;
	
	unset($torneoE);
	unset($torneoM);

echo json_encode($retorno);
?>