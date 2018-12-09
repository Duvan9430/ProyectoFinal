<?php 

/**
* 
*/
class TipoDocumentoM
{
	private $miConexion;
	private $retorno;

	function __construct()
	
	{	
		$this->miConexion=Conexion::singleton();
	
    	$this->retorno=new stdClass();
	}
	public function crearTipoDocumento(TipoDocumentoE $tipoDocumentoE)
	{
		try {
			$consulta="INSERT INTO tipodocumento VALUES(NULL,?,?,'A',NOW(),NOW(),?,?)";
			$resultado = $this->miConexion->prepare($consulta);
			$resultado->bindParam(1, $tipoDocumentoE->getTidNombre());
			$resultado->bindParam(2, $tipoDocumentoE->getTidAbreviacion());
			$resultado->bindParam(3, $tipoDocumentoE->getUsuarioCreacion());
			$resultado->bindParam(4, $tipoDocumentoE->getUsuarioModificacion());
			$resultado->execute();

			$this->retorno->estado = true;
	        $this->retorno->datos = $resultado;
	        $this->retorno->mensaje = "Tipo documento Agregado";
			
		} catch (Exception $e) {
			$this->retorno->estado = false;
	        $this->retorno->datos = null;
	        $this->retorno->mensaje = "Error: " .$e->getMessage();
		}
		return $this->retorno;
	}


	public function Read()
	{
		try {
			$sentenciaSql = "SELECT * FROM tipodocumento WHERE estado='A'";
			$resultado = $this->miConexion->query($sentenciaSql);
			$this->retorno->estado = true;
        	$this->retorno->datos = $resultado;
        	$this->retorno->mensaje = "Ejercicios cargados.";
		} catch (PDOException $e) {
			$this->retorno->estado = false;
	        $this->retorno->datos = null;
			$this->retorno->mensaje = "Error: " .$e->getMessage();
		}
		return $this->retorno;

	}


	public function ReadXtipo(TipoDocumentoE $tipoDocumentoE)
	{
		try {
			$sentenciaSql = "SELECT * FROM tipodocumento WHERE idTipoDocumento=?";
			$resultado=$this->miConexion->prepare($sentenciaSql);
	        $resultado->bindParam(1, $tipoDocumentoE->getIdTipoDocumeto());
	        $resultado->execute();

			$this->retorno->estado = true;
        	$this->retorno->datos=$resultado;
        	$this->retorno->mensaje = "Good.";
		} catch (PDOException $e) {
			$this->retorno->estado = false;
	        $this->retorno->datos = null;
			$this->retorno->mensaje = "Error: " .$e->getMessage();
		}
		return $this->retorno;
	}

	function modificar(TipoDocumentoE $tipodocumentoE){

		try{
		$consulta="UPDATE tipodocumento SET tidNombre=?, tidAbreviacion=?, estado='A',fechaModificacion=NOW(),usuarioModificacion=-1  WHERE idTipoDocumento=?";
		$resultado=$this->miConexion->prepare($consulta);
		$resultado->bindParam(1, $tipodocumentoE->getTidNombre());
		$resultado->bindParam(2, $tipodocumentoE->getTidAbreviacion());
		$resultado->bindParam(3, $tipodocumentoE->getIdTipoDocumeto());
				
		$resultado->execute();
		$this->retorno->estado = true;
        $this->retorno->datos=$resultado;
        $this->retorno->mensaje = "Good.";
		} catch (PDOException $e) {
			$this->retorno->estado = false;
	        $this->retorno->datos = null;
			$this->retorno->mensaje = "Error: " .$e->getMessage();
		}
		return $this->retorno;
	}


	public function delete(TipoDocumentoE $tipodocumentoE){
			try{
		$consulta="UPDATE tipodocumento SET estado='I' WHERE idTipoDocumento=?";
		$resultado=$this->miConexion->prepare($consulta);
	
		$resultado->bindParam(1, $tipodocumentoE->getIdTipoDocumeto());
				
		$resultado->execute();
		$this->retorno->estado = true;
        $this->retorno->datos=$resultado;
        $this->retorno->mensaje = "Good.";
		} catch (PDOException $e) {
			$this->retorno->estado = false;
	        $this->retorno->datos = null;
			$this->retorno->mensaje = "Error: " .$e->getMessage();
		}
		return $this->retorno;
		}



}

?>

			