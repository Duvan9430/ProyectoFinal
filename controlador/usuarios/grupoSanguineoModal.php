<?php 
	require_once '../Modelo/Conexion.php';
	require_once '../Modelo/grupoSanguineoM.php';
	require_once '../Entidad/grupoSanguineoE.php';


	$retorno = array('mensaje','arrayGrupoSanguineoModal');
	$grupoSanguineoE=new GrupoSanguineoE();
	
	$grupoSanguineoM = new GrupoSanguineoM();
	$resultado = $grupoSanguineoM->consultarModal();
	$retorno["arrayGrupoSanguineoModal"] = $resultado->datos->fetchAll();

	unset($grupoSanguineoM);
	unset($grupoSanguineoE);
	echo json_encode($retorno);
?>