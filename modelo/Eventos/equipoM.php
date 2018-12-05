<?php

	class Equipos
	{
		private $autocompletarSql;
		private $miConexion;
		private $retorno;

		function __construct()
		{
			$this->miConexion = Conexion::singleton();
        	$this->retorno = new stdClass();
		}

		public function crearEquipo(Equipo $equipo)
		{
			try {
	            $consulta = "INSERT INTO equipo values (null,?,?,'A',NOW(),NOW(),-1,-1)";
	            $resultado = $this->miConexion->prepare($consulta);
	            $resultado->bindParam(1, $equipo->getIdTorneo());
	            $resultado->bindParam(2, $equipo->getEquNombre());
	            $resultado->execute();

	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Producto agregado.";
	       }catch(PDOException $e){
	       		$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
	       }
	       return $this->retorno;
		}

		public function readTorneo()
		{
			try{
				$consulta = "SELECT idTorneo,torNombre FROM torneo WHERE estado= 'A'";
	            $resultado = $this->miConexion->query($consulta);

	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Datos del equipo.";
			}catch(PDOException $e){
				$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}
		public function readEquipo()
		{
			try{
				$consulta = "SELECT idEquipo,torNombre,equNombre FROM equipo INNER JOIN torneo ON equipo.idTorneo=torneo.idTorneo  where equipo.estado=torneo.estado";
	            $resultado = $this->miConexion->query($consulta);

	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Datos del equipo.";
			}catch(PDOException $e){
				$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}

		public function readModal($id)
		{
			try{
				$sentenciaSQL = "SELECT * FROM equipo INNER JOIN torneo ON equipo.idTorneo=torneo.idTorneo where equipo.idEquipo=?";
		        $resultado = $this->miConexion->prepare($sentenciaSQL);
		        $resultado->bindParam(1, $id);
		        $resultado->execute();

		        $this->retorno->estado = true;
		        $this->retorno->datos = $resultado;
		        $this->retorno->mensaje = "Datos del Equipo.";
			}catch(PDOException $e){
				$this->retorno->estado = false;
		        $this->retorno->datos = null;
		        $this->retorno->mensaje = "Error: " .$e->getMessage();
			}
		return $this->retorno;
		}

		public function updateEquipo(Equipo  $equipoE)
		{
			try {
	            $consulta = "UPDATE equipo SET idTorneo=?,equNombre=?,estado='A',fechaCreacion=NOW(),fechaModificacion=NOW() WHERE idEquipo=?";
	            $resultado = $this->miConexion->prepare($consulta);           
	            $resultado->bindParam(1, $equipoE->getIdTorneo());
	            $resultado->bindParam(2, $equipoE->getEquNombre());
	            $resultado->bindParam(3, $equipoE->getIdEquipo());
	           
	            $resultado->execute();

	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Torneo Modificado!.";
	       }catch(PDOException $e){
	       		$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
	       }
	       return $this->retorno;
		}
		public function deleteEquipo($idEquipo)
	{
		try {
	        $consulta = "UPDATE equipo SET  estado ='I' WHERE idEquipo=?";
	        $resultado = $this->miConexion->prepare($consulta);
	        $resultado->bindParam(1, $idEquipo);
	        $resultado->execute();

	        $this->retorno->estado = true;
	        $this->retorno->datos = $resultado;
	        $this->retorno->mensaje = "Torneo Eliminado!.";
	    }catch(PDOException $e){
	       	$this->retorno->estado = false;
	        $this->retorno->datos = null;
	        $this->retorno->mensaje = "Error: " .$e->getMessage();
	    }
	    return $this->retorno;
	}
		
	}
?>