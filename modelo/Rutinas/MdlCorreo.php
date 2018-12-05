<?php 


	class MdlCorreo 
	{
		private $retorno;
		private $conexion;
		
		function __construct()
		{
			$this->conexion = Conexion::singleton();
			$this->retorno = new stdClass();
		}

		function consultarCorreos(){
			try{
				$consulta = "SELECT perCorreoElectronico FROM `persona` WHERE estado = 'A'";
				$resultado = $this->conexion->query($consulta);
				$this->retorno->datos = $resultado;
				$this->retorno->estado = "Consulta Exitosa";
			}catch(PDOException $e){
				$this->retorno->estado = $e->getMessage();
			}

			return $this->retorno;
		}
	}

 ?>