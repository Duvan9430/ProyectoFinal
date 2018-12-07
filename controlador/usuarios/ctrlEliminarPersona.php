<?php
require_once '../Modelo/Conexion.php';
require_once '../Modelo/MdlPersona.php';
require_once '../Entidad/EntPersona.php';
	error_reporting(1);
	$retorno = array('mensaje');


	$MdlPersona = new MdlPersona();
	$entPersona = new EntPersona();
	$entPersona->setIdPersona($_POST['idPersonaEliminar']);
	$resultado = $MdlPersona->deletePersona($entPersona);
	$retorno["mensaje"] = $resultado->mensaje;


	unset($entPersona);
	unset($MdlPersona);

	echo json_encode($retorno);
?>