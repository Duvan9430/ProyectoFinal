<?php  
require_once '../Modelo/Conexion.php';
require_once '../Entidad/municipioE.php';
require_once '../Modelo/municipioNacM.php';

error_reporting(1);

	$retorno = array('mensaje','arrayMunicipioRec');
	$municipioE = new MunicipioE();
	$municipioM = new MunicipioM();
	$resultado = $municipioM->read($_POST['idDepartamento']);
	$retorno["arrayMunicipioRec"]=$resultado->datos->fetchAll(PDO::FETCH_ASSOC);

	unset($municipioM);
	echo json_encode($retorno);
?>