 <?php
   require_once '../../modelo/Conexion.php';
   require_once '../../modelo/Rutinas/mdlGenerarReportes.php';

   $retorno= array();

   error_reporting(0);

	$mdlReporte = new mdlGenerarReportes();

	$resultado= $mdlReporte->consultarMaquinaPersonalizada($_POST["selectMaquina"],$_POST["textMaquina"]);

	$retorno = $resultado->datos->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($retorno);

 ?>