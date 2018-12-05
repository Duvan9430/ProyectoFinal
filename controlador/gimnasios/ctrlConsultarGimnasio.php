<?php 
	require_once '../../modelo/conexion.php';
	require_once '../../modelo/gimnasios/mdlGimnasio.php';
    $retorno =array('array');

    $MdlGimnasio =new MdlGimnasio();
    $resultado = $MdlGimnasio->consultarGimnasio();

    $retorno ["array"]=$resultado->datos->fetchAll();

    echo json_encode($retorno);

 ?>