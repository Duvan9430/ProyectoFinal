<?php 
	require_once '../../modelo/conexion.php';
	require_once '../../modelo/gimnasios/mdlGimnasio.php';
	require_once '../../entidad/gimnasios/entGimnasio.php';
	$imagen = str_shuffle('abcdefghijksafd');
	error_reporting(1);
	
	session_start();
	$retorno = array('mensaje');
	$entGimnasio = new EntGimnasio();
	$entGimnasio->setIdGimnasio($_POST['txtIdGimnasioMod']);
	$entGimnasio->setIdSede($_POST['sltSedeMod']);
	$entGimnasio->setGimNombre($_POST['txtagimNombreMod']);
	$entGimnasio->setGimDescripcion($_POST['txtadescripcionGimnasioMod']);
	//$entGimnasio->setGimImagen($imagen.'.jpg'); 
	$entGimnasio->setUsuarioCreacion($_SESSION['idPersonaLogueada']);
	$entGimnasio->setUsuarioModificacion($_SESSION['idPersonaLogueada']);

	$MdlGimnasio = new MdlGimnasio();
	//move_uploaded_file($_FILES['txtimgGimnasioMod']['tmp_name'], '../../img/gimnasios/Gimnasios/'.$imagen.'.jpg');
	$resultado = $MdlGimnasio->updateGimnasio($entGimnasio);
	$retorno['mensaje'] = $resultado->mensaje;


	unset($entGimnasio);
	unset($MdlGimnasio);

	echo json_encode($retorno);

 ?>