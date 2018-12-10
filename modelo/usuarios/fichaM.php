<?php
	class fichaM
	{
		private $miConexion;
		private $retorno;
		function __construct()
		{
			$this->miConexion = Conexion::singleton();
        	$this->retorno = new stdClass();
		}
		public function Read()
		{
			try{
				$sentenciaSql="SELECT * FROM ficha WHERE estado='A'";
				$resultado = $this->miConexion->query($sentenciaSql);
	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Datos de la ficha.";
	            }catch(PDOException $e){
				$this->retorno->estado = false;
	            $this->retorno->datos1 = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}
		public function createFicha(FichaE $ficha){
			try {
				$sentenciaSql = "INSERT INTO ficha VALUES (null, ?, ?, 'A', NOW(), NOW(), -1, -1)";
				$resultado = $this->miConexion->prepare($setenciaSql);
				$resultado->bindParam(1, $ficha->getFicNumero());
				$resultado->bindParam(2, $ficha->getFicNombre());
				$resultado-execute();

				$this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Ficha agregada.";
			} catch (Exception $e) {
				$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
			}
		}
	}
?>