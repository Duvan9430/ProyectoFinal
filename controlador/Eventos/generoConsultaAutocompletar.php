<?php  
require_once '../../modelo/Conexion.php';
require_once '../../entidad/Eventos/participanteE.php';
require_once '../../modelo/Eventos/participanteM.php';

error_reporting(1);
$retorno= array('arrayTorneo' => null,'datosParticipante' => null);

	$nombre=$_GET['term'];
	

		
		

		$participanteM= new ParticipanteM();  
		$resultado=$participanteM->autocomplete($nombre);
		//$retorno['arrayTorneo'] = $resultado->datos->fetchAll(PDO::FETCH_ASSOC);
		$resul = $resultado->datos->fetchAll(PDO::FETCH_ASSOC);

		foreach ($resul as $key => $value) {
			array_walk_recursive($resul[$key]['label'], function(&$item, $key){
				if(!mb_detect_encoding($item, 'utf-8', true)){
					$item = utf8_encode($item);
				}
			});			
		}
		$retorno['arrayTorneo'] = $resul;
		// array_walk_recursive($retorno['arrayTorneo'], function($item, $key)){
		// 	if(!mb_detect_encoding($item, 'utf-8', true)){
		// 		$item = utf8_encode($item);
		// 	}
		// }
		
		foreach ($retorno['arrayTorneo'] as $key => $value) {
			$informacion[$key]['tipoIdentificacion']=$value['tidAbreviacion'];
			$informacion[$key]['label']=$value['Nombres'];
			$informacion[$key]['value']=$value['Nombres'];
			$informacion[$key]['id'] = $value['idAprendiz'];
			$informacion[$key]['nit'] = $value['perNit'];
			$informacion[$key]['ficha'] = $value['ficNumero'];
			
			
		}


echo json_encode($informacion);

?>