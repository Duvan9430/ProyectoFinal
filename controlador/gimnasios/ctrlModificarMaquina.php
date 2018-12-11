<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/gimnasios/mdlMaquina.php';
	require_once '../../entidad/gimnasios/entMaquina.php';
	$imagen = str_shuffle('Maquinas');
	error_reporting(1);

	session_start();
	$retorno = array('mensaje');
	$entMaquina = new EntMaquina();
	$entMaquina->setIdMaquina($_POST['txtIdMaqModal']);
	$entMaquina->setMaqNombre($_POST['txtmaqNombreModal']);
	$entMaquina->setMaqCodigo($_POST['txtmaqCodigoModal']);
	$entMaquina->setMaqDescripcion($_POST["txtmaqDescripcionModal"]);
	$entMaquina->setMaqObservacion($_POST["txtmaqObservacionModal"]);
	//$entMaquina->setMaqImagen($imagen.'.jpg');
	$entMaquina->setUsuarioCreacion($_SESSION['idPersonaLogueada']);
	$entMaquina->setUsuarioModificacion($_SESSION['idPersonaLogueada']);


	$MdlMaquina = new MdlMaquina();
	//move_uploaded_file($_FILES['txtmaqImagenModal']['tmp_name'], '../../img/gimnasios/Maquinas/'.$imagen.'.jpg');
	$resultado = $MdlMaquina->updateMaquina($entMaquina);
	$retorno["mensaje"] = $resultado->mensaje;


	unset($entMaquina);
	unset($MdlMaquina);

	echo json_encode($retorno);
 ?>


 
