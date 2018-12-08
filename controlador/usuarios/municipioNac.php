../<?php  
require_once '../../modelo/Conexion.php';
require_once '../../entidad/usuarios/municipioE.php';
require_once '../../modelo/usuarios/municipioNacM.php';

error_reporting(1);

	$retorno = array('mensaje','arrayMunicipioRec');
	$municipioE = new MunicipioE();
	$municipioM = new MunicipioM();
	$resultado = $municipioM->read($_POST['idDepartamento']);
	$retorno["arrayMunicipioRec"]=$resultado->datos->fetchAll(PDO::FETCH_ASSOC);

	unset($municipioM);
	echo json_encode($retorno);
?>