<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/Rutinas/modeloP.php';

$retorno = array("BajoPeso","Saludable","SobrePeso","Obesidad");
try {
	
	
	$modelo = new Modelo();
	$result = $modelo->ConsultarELBajoPeso($_POST["txtFecha"],$_POST["txtFechaAlquiler2"],1);
	$result1 = $modelo->ConsultarSaludable($_POST["txtFecha"],$_POST["txtFechaAlquiler2"],2);
	$resultado3 = $modelo->ConsultarSobrePeso($_POST["txtFecha"],$_POST["txtFechaAlquiler2"],3);
	$resultado4 = $modelo->ConsultarObesidad($_POST["txtFecha"],$_POST["txtFechaAlquiler2"],4);
	
	$retorno["BajoPeso"] = $result->dato;
	$retorno["Saludable"] =$result1->dato1;
	$retorno["SobrePeso"] = $resultado3->datos3;
	$retorno["Obesidad"] = $resultado4->datos4;
	$retorno["estadoObesidad"] = $resultado4->estado;
	$retorno["estadoSobrePeso"] = $resultado3->estado;
	$retorno["estadoSaludable"] = $result1->estado;
	$retorno["estadoBajoPeso"] = $result->estado;

} catch (Exception $e) {
	$retorno = 'Error '.$e->getMessage();
}
echo json_encode($retorno);

 ?>