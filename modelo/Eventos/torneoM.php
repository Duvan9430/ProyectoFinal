<?php 
class TorneoM
{
	private $miConexion;
	private $retorno;
	function __construct()
	{
		$this->miConexion =  Conexion::Singleton();
		$this->retorno = new stdClass();
	}
	public function create(TorneoE $torneoE)
		{
			try {
	            $consulta = "INSERT INTO torneo VALUES(null,?,?,?,?,?,?,?,?,?,?,'A',NOW(),NOW(),1,1)";
	            $resultado = $this->miConexion->prepare($consulta);
	            $resultado->bindParam(1, $torneoE->getIdClasificacionTorneo());
	            $resultado->bindParam(2, $torneoE->getIdDisciplina());
	            $resultado->bindParam(3, $torneoE->getIdLugar());
	            $resultado->bindParam(4, $torneoE->getIdGeneroTorneo());
	            $resultado->bindParam(5, $torneoE->getIdEncargado());
	            $resultado->bindParam(6, $torneoE->getIdTipoEliminatoria());
	            $resultado->bindParam(7, $torneoE->getTorNumeroEquipos());
	            $resultado->bindParam(8, $torneoE->getTorNombre());
	            $resultado->bindParam(9, $torneoE->getTorFechaInicio());
	            $resultado->bindParam(10, $torneoE->getTorFechaFin());
	            $resultado->execute();

	            $this->retorno->estado = true;
	            $this->retorno->datos = $resultado;
	            $this->retorno->mensaje = "Torneo Creado!.";
	       }catch(PDOException $e){
	       		$this->retorno->estado = false;
	            $this->retorno->datos = null;
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
	       }
	       return $this->retorno;
		}

	public function read()
	{
		try{
			$sentenciaSQL = " SELECT * FROM torneo INNER JOIN clasificaciontorneo ON torneo.idClasificacionTorneo=clasificaciontorneo.idClasificacionTorneo INNER JOIN disciplina ON torneo.idDisciplina=disciplina.idDisciplina INNER JOIN lugar ON torneo.idLugar=lugar.idLugar INNER JOIN generotorneo ON torneo.idGeneroTorneo=generotorneo.idGeneroTorneo INNER JOIN tipoeliminatoria ON torneo.idTipoEliminatoria=tipoEliminatoria.idTipoEliminatoria WHERE torneo.estado = 'A'";
	        $resultado = $this->miConexion->query($sentenciaSQL);
	        $this->retorno->estado = true;
	        $this->retorno->datos = $resultado;
	        $this->retorno->mensaje = "Datos del torneo.";
		}catch(PDOException $e){
			$this->retorno->estado = false;
	        $this->retorno->datos = null;
	        $this->retorno->mensaje = "Error: " .$e->getMessage();
		}
	return $this->retorno;
	}	
	public function readTorneoPrincipal()
	{
		try{
			$sentenciaSQL = "SELECT * FROM torneo INNER JOIN clasificaciontorneo ON torneo.idClasificacionTorneo=clasificaciontorneo.idClasificacionTorneo INNER JOIN disciplina ON torneo.idDisciplina=disciplina.idDisciplina INNER JOIN lugar ON torneo.idLugar=lugar.idLugar INNER JOIN generotorneo ON torneo.idGeneroTorneo=generotorneo.idGeneroTorneo INNER JOIN tipoeliminatoria ON torneo.idTipoEliminatoria=tipoEliminatoria.idTipoEliminatoria WHERE torneo.estado='A'";
	        $resultado = $this->miConexion->query($sentenciaSQL);
	        $this->retorno->estado = true;
	        $this->retorno->datos = $resultado;
	        $this->retorno->mensaje = "Datos del torneo.";
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
			$sentenciaSQL = "SELECT * FROM torneo INNER JOIN clasificaciontorneo ON torneo.idClasificacionTorneo=clasificaciontorneo.idClasificacionTorneo INNER JOIN disciplina ON torneo.idDisciplina=disciplina.idDisciplina INNER JOIN lugar ON torneo.idLugar=lugar.idLugar INNER JOIN generotorneo ON torneo.idGeneroTorneo=generotorneo.idGeneroTorneo INNER JOIN tipoeliminatoria ON torneo.idTipoEliminatoria=tipoEliminatoria.idTipoEliminatoria WHERE torneo.idTorneo=?";
	        $resultado = $this->miConexion->prepare($sentenciaSQL);
	        $resultado->bindParam(1, $id);
	        $resultado->execute();

	        $this->retorno->estado = true;
	        $this->retorno->datos = $resultado;
	        $this->retorno->mensaje = "Datos del torneo.";
		}catch(PDOException $e){
			$this->retorno->estado = false;
	        $this->retorno->datos = null;
	        $this->retorno->mensaje = "Error: " .$e->getMessage();
		}
	return $this->retorno;
	}
	public function deleteTorneo($idTorneo)
	{
		try {
	        $consulta = "UPDATE torneo SET  estado ='I' WHERE idTorneo=?";
	        $resultado = $this->miConexion->prepare($consulta);
	        $resultado->bindParam(1, $idTorneo);
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
	public function updateTorneo(TorneoE $torneoE)
		{
			try {
	            $consulta = "UPDATE torneo SET idClasificacionTorneo=?, idDisciplina=?, idLugar=?, idGeneroTorneo=?, idTipoEliminatoria=?, torNumeroEquipos=?, torNombre=?, torFechaInicio=?, torFechaFin=?, fechaModificacion= NOW(), usuarioModificacion =NOW() WHERE idTorneo=?";
	            $resultado = $this->miConexion->prepare($consulta);           
	            $resultado->bindParam(1, $torneoE->getIdClasificacionTorneo());
	            $resultado->bindParam(2, $torneoE->getIdDisciplina());
	            $resultado->bindParam(3, $torneoE->getIdLugar());
	            $resultado->bindParam(4, $torneoE->getIdGeneroTorneo());
	            $resultado->bindParam(5, $torneoE->getIdTipoEliminatoria());
	            $resultado->bindParam(6, $torneoE->getTorNumeroEquipos());
	            $resultado->bindParam(7, $torneoE->getTorNombre());
	            $resultado->bindParam(8, $torneoE->getTorFechaInicio());
	            $resultado->bindParam(9, $torneoE->getTorFechaFin());
	            $resultado->bindParam(10, $torneoE->getIdTorneo());
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
}
?>
