<?php 
	require_once '../../modelo/conexion.php';
	require_once '../../modelo/gimnasios/mdlMaquina.php';
    $retorno =array('array');

    $MdlMaquina =new MdlMaquina();
    $resultado = $MdlMaquina->consultarMaquina();

    $retorno ["array"]=$resultado->datos->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($retorno);

 ?>