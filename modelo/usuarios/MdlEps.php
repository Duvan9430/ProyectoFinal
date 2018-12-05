<?php
	class MdlEps
	{
		private $miConexion;
		private $retorno;
		function __construct()
		{
			$this->miConexion = Conexion::singleton();
        	$this->retorno = new stdClass();
		}

		public function createEps(EntEps $eps){
			try {
				$consulta = "INSERT INTO eps VALUES(null,?,?,'A',NOW(),NOW(),-1,-1)";
				$resultado = $this->miConexion->prepare($consulta);
				$resultado->bindParam(1, $eps->getEpsCodigo());
				$resultado->bindParam(2, $eps->getEpsNombre());
				$resultado->execute();

				$this->retorno->estado = true;
		        $this->retorno->datos = $resultado;
		        $this->retorno->mensaje = "Eps Creada.";

			} catch (PDOException $e) {
				$this->retorno->estado = false;
		        $this->retorno->datos = null;
		        $this->retorno->mensaje = "Error: ".$e->getMessage();
			}
			return $this->retorno;
		}
    
    	public function consultarEps(){
			try{
				$consulta = "SELECT * FROM eps";
	            $resultado9 = $this->miConexion->query($consulta);

	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado9;
	            $this->retorno->mensaje = "Datos de la Eps.";
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
				$consulta = "SELECT * FROM eps WHERE idEps = ?";
	            $resultado = $this->miConexion->prepare($consulta);
	            $resultado->bindParam(1,$id);
	            $resultado->execute();

	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Datos de la Eps modal.";
			}catch(PDOException $e){
				$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}

		public function updateEps(EntEps $eps){
			try {
		 		$consulta = "UPDATE eps SET epsCodigo = ?, epsNombre = ? WHERE idEps = ?";
		 		$resultado = $this->miConexion->prepare($consulta);
		 		$resultado->bindParam(1, $eps->getEpsCodigo());
				$resultado->bindParam(2, $eps->getEpsNombre());
				$resultado->bindParam(3, $eps->getIdEps());
				$resultado->execute();

		 		$this->retorno->estado = true;
		        $this->retorno->datos = $resultado;
		        $this->retorno->mensaje = "Eps Modificado.";
	 		} catch (Exception $e) {
		 		$this->retorno->estado = false;
		        $this->retorno->datos = null;
		        $this->retorno->mensaje = "Error: ".$e->getMessage();
	 		}
	 		return $this->retorno;
	 	}
		public function deleteEps(EntEps $entEps){
			try{
				$consulta = "UPDATE eps SET estado = 'I' WHERE idEps = ?";
				$resultado = $this->miConexion->prepare($consulta);
	            $resultado->bindParam(1, $entEps->getIdEps());
	            $resultado->execute();

	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Eps Eliminada.";
			}catch(PDOException $e){
				$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}
	}
?>
			

		