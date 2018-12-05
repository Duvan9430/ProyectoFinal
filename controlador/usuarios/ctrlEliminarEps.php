<?php
require_once '../../modelo/Conexion.php';
require_once '../../modelo/usuarios/MdlEps.php';
require_once '../../entidad/usuarios/EntEps.php';
	//error_reporting(1);
	

	$idEps=$_POST['idEpsModal'];
	$retorno = array('mensaje','array');


	$entEps = new EntEps();
	$entEps->setIdEps($idEps);



	$MdlEps = new MdlEps();
	

	$resultado = $MdlEps->deleteEps($entEps);
	$retorno["mensaje"] = $resultado->mensaje;
	
	unset($entEps);
	unset($MdlEps);

	echo json_encode($retorno);
?>

<?php 
	



	
	