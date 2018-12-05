<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/usuarios/MdlEps.php';
    $retorno =array('array');

    $MdlEps =new MdlEps();
    $resultado9 = $MdlEps->consultarEps();

    $retorno ["array"]=$resultado9->datos->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($retorno);

 ?>