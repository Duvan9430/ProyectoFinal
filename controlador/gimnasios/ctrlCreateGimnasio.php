<?php 
	require_once '../../modelo/conexion.php';
	require_once '../../modelo/gimnasios/mdlGimnasio.php';
	require_once '../../entidad/gimnasios/entGimnasio.php';
	error_reporting(1);

	session_start();
	$retorno = array('mensaje');
	$entGimnasio = new EntGimnasio();
	$entGimnasio->setIdSede($_POST['sltSede']);
	$entGimnasio->setGimNombre($_POST['txtagimNombre']);	
	$entGimnasio->setGimDescripcion($_POST['txtadescripcionGimnasio']);
	$entGimnasio->setGimImagen($_POST['txtagimNombre'].'.jpg');
	$entGimnasio->setUsuarioCreacion($_SESSION['idPersonaLogueada']);
	$entGimnasio->setUsuarioModificacion($_SESSION['idPersonaLogueada']);
	//Para obtener el id de la persona que realizo el registro colocar entre los paretesis una variable de sesion.

	$MdlGimnasio = new MdlGimnasio();
	move_uploaded_file($_FILES['txtimgGimnasio']['tmp_name'],'../../img/gimnasios/Gimnasios/'.$_POST["txtagimNombre"].'.jpg');
	$resultado = $MdlGimnasio->createGimnasio($entGimnasio);
	$retorno["mensaje"] = $resultado->mensaje;
	unset($entGimnasio);
	unset($MdlGimnasio);

	echo json_encode($retorno);
 ?>