<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/usuarios/EntEps.php';
	require_once '../../entidad/usuarios/MdlEps.php';
	error_reporting(1);
    $retorno =array('array');
	$entEps = new EntEps();
	$entEps->setEpsNombre($_POST['txtEpsNombre']);
	$entEps->setEpsCodigo($_POST['txtEpsCodigo']);
    $MdlEps =new MdlEps();
    $resultado = $MdlEps->updateEps($entEps);

    $retorno ["array"]=$resultado->mensaje;

    echo json_encode($retorno);

 ?>