<?php
	class tipoDocumentoM
	{
		private $miConexion;
		private $retorno;
		function __construct()
		{
			$this->miConexion = Conexion::singleton();
        	$this->retorno = new stdClass();
		}
		public function consultar()
		{
			try{
				$sentenciaSql="SELECT * FROM tipodocumento WHERE estado='A'";
				$resultado = $this->miConexion->query($sentenciaSql);
	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Datos de la persona.";
	            }catch(PDOException $e){
				$this->retorno->estado = false;
	            $this->retorno->datos1 = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}
		public function consultarModal()
		{
			try{
				$sentenciaSql="SELECT * FROM tipodocumento WHERE estado='A'";
				$resultado = $this->miConexion->query($sentenciaSql);
	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Datos de la persona.";
	            }catch(PDOException $e){
				$this->retorno->estado = false;
	            $this->retorno->datos1 = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}
	}
?>