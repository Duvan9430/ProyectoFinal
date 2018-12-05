<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/Rutinas/mdlCrearRutina.php';

	$retorno= array();
    $MdlCrearRutina = new mdlCrearRutina();
    $resultado= $MdlCrearRutina->clasificacion();
    $retorno= $resultado->datos->fetchAll(PDO:: FETCH_ASSOC);

    echo json_encode($retorno);

 ?>