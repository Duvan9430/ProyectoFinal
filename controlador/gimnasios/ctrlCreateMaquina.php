<?php 
	require_once '../../modelo/conexion.php';
	require_once '../../modelo/gimnasios/mdlMaquina.php';
	require_once '../../entidad/gimnasios/entMaquina.php';
	error_reporting(1);

	session_start();
	$retorno = array('mensaje');
	$entMaquina = new EntMaquina();
	$entMaquina->setMaqNombre($_POST['txtmaqNombre']);
	$entMaquina->setMaqCodigo($_POST['txtmaqCodigo']);
	$entMaquina->setMaqDescripcion($_POST["txtmaqDescripcion"]);
	$entMaquina->setMaqObservacion($_POST["txtmaqObservacion"]);
	$entMaquina->setMaqImagen($_POST["txtmaqNombre"].'.jpg');
	$entMaquina->setUsuarioCreacion($_SESSION['idPersonaLogueada']);
	$entMaquina->setUsuarioModificacion($_SESSION['idPersonaLogueada']);
	//Para obtener el id de la persona que realizo el registro colocar entre los paretesis una variable de sesion.

	$MdlMaquina = new MdlMaquina();
	move_uploaded_file($_FILES['txtmaqImagen']['tmp_name'], '../../img/gimnasios/Maquinas/'.$_POST["txtmaqNombre"].'.jpg');
	$resultado = $MdlMaquina->createMaquina($entMaquina);
	$retorno["mensaje"] = $resultado->mensaje;

	unset($entMaquina);
	unset($MdlMaquina);

	echo json_encode($retorno);
 ?>