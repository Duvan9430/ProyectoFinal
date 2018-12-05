<?php 
	require_once '../../modelo/conexion.php';
	require_once '../../modelo/gimnasios/mdlGimnasio.php';
	require_once '../../entidad/gimnasios/entGimnasio.php';

	error_reporting(1);
	$retorno = array('mensaje');

	$MdlGimnasio = new MdlGimnasio();
	$entGimnasio = new EntGimnasio();
	$entGimnasio->setIdGimnasio($_POST['idGimnasioEliminar']);
	$resultado = $MdlGimnasio->deleteGimnasio($entGimnasio);
	$retorno["mensaje"] = $resultado->mensaje;

	unset($entGimnasio);
	unset($MdlGimnasio);

	echo json_encode($retorno);
 ?>