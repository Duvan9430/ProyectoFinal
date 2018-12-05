<?php 
	require_once '../../modelo/conexion.php';
	require_once '../../entidad/usuarios/fichaE.php';
	require_once '../../modelo/usuarios/fichaM.php';

	
	$idFicha=$_POST['idFichaModal'];
	$retorno = array('mensaje', 'arrayXFicha');

	$fichaE = new FichaE();
	$fichaE->setIdFicha($idFicha);
	
	$fichaM = new FichaM();
	$resultado = $fichaM->delete($fichaE);
	$retorno["mensaje"] = $resultado->mensaje;

	unset($fichaE);
	unset($fichaM);

	echo json_encode($retorno);

?>

