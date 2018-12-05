<?php 
require_once '../../modelo/Eventos/MunicipioM.php';
require_once '../../modelo/Conexion.php';
require_once '../../entidad/Eventos/municipioE.php';
error_reporting(1);
$retorno = array('mensaje','arrayMunicipio');
	$municipioE = new MunicipioE();
	$municipioM = new MunicipioM();
	$resultado = $municipioM->read($_POST['idDepartamento']);
	$retorno["arrayMunicipio"]=$resultado->datos->fetchAll(PDO::FETCH_ASSOC);

	unset($municipioM);
	echo json_encode($retorno);
?>