<?php
require_once '../../modelo/conexion.php';
require_once '../../modelo/gimnasios/mdlMaquina.php';
require_once '../../entidad/gimnasios/entMaquina.php';
	error_reporting(1);
	$retorno = array('mensaje');


	$MdlMaquina = new MdlMaquina();
	$entMaquina = new EntMaquina();
	$entMaquina->setIdMaquina($_POST['idMaquinaEliminar']);
	$resultado = $MdlMaquina->deleteMaquina($entMaquina);
	$retorno["mensaje"] = $resultado->mensaje;


	unset($entMaquina);
	unset($MdlMaquina);

	echo json_encode($retorno);
?>