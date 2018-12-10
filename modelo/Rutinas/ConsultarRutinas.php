<?php 

	/**
	 * 
	 */
	class RutinasAprendiz
	{
		private $conexion;
		private $retorno;
		
		function __construct()
		{
			$this->conexion =  Conexion::singleton();
			$this->retorno = new stdClass();
		
		} 
		function ConsultarAprendizRutina(){
			try {
			$consulta = "SELECT  ejerciciomusculo.ejmDescripcion,ejerciciomusculo.ejmFoto, musculo.idClasificacionMusculo,musculo.musNombre FROM ejerciciomusculo INNER JOIN musculo ON ejerciciomusculo.idMusculo = musculo.idMusculo INNER JOIN clasificacionmusculo ON musculo.idClasificacionMusculo = clasificacionmusculo.idClasificacionMusculo WHERE clasificacionmusculo.idClasificacionMusculo = 1 AND  ejerciciomusculo.estado = 'A'";
			$resultado = $this->conexion->query($consulta);
			$this->retorno->datos = $resultado;
			$this->retorno->mensaje = "Consulto";
			}catch (PDOException $e) {
			$this->retorno->datos = null;
			$this->retorno->mensaje= "Error: " .$e->getMessage();	
			}
			return $this->retorno;
		}
	
		function ConsultarEspaLda(){
			try {
			$consulta = "SELECT  ejerciciomusculo.ejmDescripcion,ejerciciomusculo.ejmFoto, musculo.idClasificacionMusculo,musculo.musNombre FROM ejerciciomusculo INNER JOIN musculo ON ejerciciomusculo.idMusculo = musculo.idMusculo INNER JOIN clasificacionmusculo ON musculo.idClasificacionMusculo = clasificacionmusculo.idClasificacionMusculo WHERE clasificacionmusculo.idClasificacionMusculo = 2 AND  ejerciciomusculo.estado = 'A'";
			$resultado1 = $this->conexion->query($consulta);
			$this->retorno->datos1 = $resultado1;
			$this->retorno->mensaje = "Consulto";
			}catch (PDOException $e) {
			$this->retorno->datos1 = null;
			$this->retorno->mensaje= "Error: " .$e->getMessage();	
			}
			return $this->retorno;
		}
		function ConsultarPiernas(){
			try {
			$consulta = "SELECT  ejerciciomusculo.ejmDescripcion,ejerciciomusculo.ejmFoto, musculo.idClasificacionMusculo,musculo.musNombre FROM ejerciciomusculo INNER JOIN musculo ON ejerciciomusculo.idMusculo = musculo.idMusculo INNER JOIN clasificacionmusculo ON musculo.idClasificacionMusculo = clasificacionmusculo.idClasificacionMusculo WHERE clasificacionmusculo.idClasificacionMusculo = 3 AND ejerciciomusculo.estado = 'A'";
			$resultado2 = $this->conexion->query($consulta);
			$this->retorno->datos2 = $resultado2;
			$this->retorno->mensaje = "Consulto";
			}catch (PDOException $e) {
			$this->retorno->datos2 = null;
			$this->retorno->mensaje= "Error: " .$e->getMessage();	
			}
			return $this->retorno;
		}
	
	}


 ?>