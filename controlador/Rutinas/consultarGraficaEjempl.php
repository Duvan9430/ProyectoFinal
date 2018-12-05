<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/Rutinas/modeloP.php';

$retorno = array();
try {
	$modelo = new Modelo();
	$resultado5 = $modelo->ConsultarPersonas();
	
	$retorno=$resultado5->datos5->fetchAll();
} catch (Exception $e) {
	$retorno[] = 'Error '.$e->getMessage();
}
echo json_encode($retorno);

 ?>