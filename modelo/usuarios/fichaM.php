<?php 

/**
* 
*/
class FichaM
{
	private $miConexion;
	private $retorno;

	function __construct()
	
	{	
		$this->miConexion=Conexion::singleton();
	
    	$this->retorno=new stdClass();
	}
	public function crearFicha(FichaE $fichaE)
	{
		try {
			$consulta="INSERT INTO ficha VALUES(NULL,?,?,'A',NOW(),NOW(),?,?)";
			$resultado = $this->miConexion->prepare($consulta);
			$resultado->bindParam(1, $fichaE->getFicNombre());
			$resultado->bindParam(2, $fichaE->getFicNumero());
			$resultado->bindParam(3, $fichaE->getUsuarioCreacion());
			$resultado->bindParam(4, $fichaE->getUsuarioModificacion());
			$resultado->execute();

			$this->retorno->estado = true;
	        $this->retorno->datos = $resultado;
	        $this->retorno->mensaje = "Ficha Agregado";
			
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
			$sentenciaSql = "SELECT * FROM ficha WHERE estado='A'";
			$resultado = $this->miConexion->query($sentenciaSql);
			$this->retorno->estado = true;
        	$this->retorno->datos = $resultado;
        	$this->retorno->mensaje = "Fichas Cargadas.";
		} catch (PDOException $e) {
			$this->retorno->estado = false;
	        $this->retorno->datos = null;
			$this->retorno->mensaje = "Error: " .$e->getMessage();
		}
		return $this->retorno;

	}


	public function ReadXtipo(FichaE $fichaE)
	{
		try {
			$sentenciaSql = "SELECT * FROM ficha WHERE idFicha=?";
			$resultado=$this->miConexion->prepare($sentenciaSql);
	        $resultado->bindParam(1, $fichaE->getIdFicha());
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

	function modificar(FichaE $fichaE){

		try{
		$consulta="UPDATE ficha SET ficNombre=?, ficNumero=?, estado='A',fechaModificacion=NOW(),usuarioModificacion=-1  WHERE idFicha=?";
		$resultado=$this->miConexion->prepare($consulta);
		$resultado->bindParam(1, $fichaE->getFicNombre());
		$resultado->bindParam(2, $fichaE->getFicNumero());
		$resultado->bindParam(3, $fichaE->getIdFicha());
				
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


	public function delete(FichaE $fichaE){
			try{
		$consulta="UPDATE ficha SET estado='I' WHERE idFicha=?";
		$resultado=$this->miConexion->prepare($consulta);
	
		$resultado->bindParam(1, $fichaE->getIdFicha());
				
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

			