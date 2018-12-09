<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/usuarios/grupoSanguineoM.php';
	require_once '../../entidad/usuarios/grupoSanguineoE.php';


	$retorno = array('mensaje','arrayGrupoSanguineoModal');
	$grupoSanguineoE=new GrupoSanguineoE();
	
	$grupoSanguineoM = new GrupoSanguineoM();
	$resultado = $grupoSanguineoM->consultar();
	$retorno["arrayGrupoSanguineo"] = $resultado->datos->fetchAll();

	unset($grupoSanguineoM);
	unset($grupoSanguineoE);
	echo json_encode($retorno);
?>