<?php
	class MdlMaquina
	{
		private $miConexion;
		private $retorno;
		function __construct()
		{
			$this->miConexion = Conexion::singleton();
        	$this->retorno = new stdClass();
		}

		public function createMaquina(EntMaquina $maquina){
			try {
	            $consulta = "INSERT INTO maquina values (null,?,?,?,?,?,'A',NOW(),NOW(),?,?)";
	            $resultado = $this->miConexion->prepare($consulta);
	            $resultado->bindParam(1, $maquina->getMaqNombre());
	            $resultado->bindParam(2, $maquina->getMaqCodigo());
	            $resultado->bindParam(3, $maquina->getMaqDescripcion());
	            $resultado->bindParam(4, $maquina->getMaqObservacion());
	            $resultado->bindParam(5, $maquina->getMaqImagen());
	            $resultado->bindParam(6, $maquina->getUsuarioCreacion());
	            $resultado->bindParam(7, $maquina->getUsuarioModificacion());
	            $resultado->execute();

	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	       }catch(PDOException $e){
	       		$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
	       }
	       return $this->retorno;
		}
    
    	public function consultarMaquina(){
			try{
				$consulta = "SELECT * FROM maquina WHERE Estado = 'A'";
	            $resultado = $this->miConexion->query($consulta);

	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Datos de la maquina.";
			}catch(PDOException $e){
				$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}

		public function consultarModal($id)
		{
			try{
				$consulta = "SELECT * FROM maquina WHERE idMaquina = ?";
	            $resultado = $this->miConexion->prepare($consulta);
	            $resultado->bindParam(1,$id);
	            $resultado->execute();

	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Datos de la maquina modal.";
			}catch(PDOException $e){
				$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}

		public function updateMaquina(EntMaquina $maquina){
			try{
				$consulta = "UPDATE maquina SET maqNombre = ?, maqCodigo = ?, maqDescripcion = ?, maqObservacion= ?, maqImagen = ? WHERE idMaquina = ?";
	            $resultado = $this->miConexion->prepare($consulta);
	            $resultado->bindParam(1, $maquina->getMaqNombre());
	            $resultado->bindParam(2, $maquina->getMaqCodigo());
	            $resultado->bindParam(3, $maquina->getMaqDescripcion());
	            $resultado->bindParam(4, $maquina->getMaqObservacion());
	            $resultado->bindParam(5, $maquina->getMaqImagen());
	            $resultado->bindParam(6, $maquina->getIdMaquina());
	            $resultado->execute();

	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Maquina modificada.";
			}catch(PDOException $e){
				$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}

		public function deleteMaquina($maquina){
			try{
				$consulta = "UPDATE maquina SET estado = 'I' WHERE idMaquina = ?";
				$resultado = $this->miConexion->prepare($consulta);
	            $resultado->bindParam(1, $maquina->getIdMaquina());
	            $resultado->execute();

	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Maquina Eliminada.";
			}catch(PDOException $e){
				$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}
		

		

		
	}
?>