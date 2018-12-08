<?php
require_once '../../modelo/Conexion.php';
require_once '../../modelo/usuarios/MdlPersona.php';
require_once '../../entidad/usuarios/EntPersona.php';
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