<?php  
	require_once '../../modelo/Conexion.php';
	require_once '../../entidad/usuarios/municipioE.php';
	require_once '../../modelo/usuarios/municipioNacM.php';

	$retorno = array();
	$municipioE = new MunicipioE();
	$municipioM = new MunicipioM();
	$resultado = $municipioM->read(2);
	$retorno=$resultado->datos->fetchAll(PDO::FETCH_ASSOC);

	unset($municipioM);
	echo json_encode($retorno);
?>