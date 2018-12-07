<?php 
require_once '../../entidad/Eventos/torneoE.php';
require_once '../../modelo/Eventos/torneoM.php';
require_once '../../modelo/Eventos/conexion.php';

error_reporting(1);
$retorno = array('mensaje');

	$torneoE = new TorneoE();
	$torneoE->setIdTorneo($_POST['txtIdTorneoModal']);
	$torneoE->setIdClasificacionTorneo($_POST['sltClasificacionTorneoModal']);
	$torneoE->setIdDisciplina($_POST['sltDisciplinaModal']);
	$torneoE->setIdLugar($_POST['sltLugarModal']);
	$torneoE->setIdGeneroTorneo($_POST['sltGeneroTorneoModal']);
	$torneoE->setIdTipoEliminatoria($_POST['sltTipoEliminatoriaModal']);
	$torneoE->setTorNombre($_POST['txtNombreTorneoModal']);
	$torneoE->setTorNumeroEquipos($_POST['txtNumeroEquiposModal']);
	$torneoE->setTorFechaInicio($_POST['txtFechaInicioModal']);
	$torneoE->setTorFechaFin($_POST['txtFechaFinModal']);
	

	$torneoM = new TorneoM();
	$resultado = $torneoM->updateTorneo($torneoE);
	$retorno['mensaje'] = $resultado->mensaje;

	unset($torneoE);
	unset($torneoM);


echo json_encode($retorno);
?>