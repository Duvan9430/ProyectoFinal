<?php 
class LugarM
{
	private $miConexion;
	private $retorno;
	function __construct()
	{
		$this->miConexion =  Conexion::Singleton();
		$this->retorno = new stdClass();
	}

	public function create(LugarE $lugarE)
	{
		try {
			$consulta = "INSERT INTO lugar VALUES(null,?,?,?,'A',NOW(),NOW(),1,1)";
			$resultado = $this->miConexion->prepare($consulta);
	        $resultado->bindParam(1, $lugarE->getIdMunicipio());
	        $resultado->bindParam(2, $lugarE->getLugNombre());
	        $resultado->bindParam(3, $lugarE->getLugDireccion());
	        $resultado->execute();
	        $this->retorno->estado = true;
	        $this->retorno->datos = $resultado;
	        $this->retorno->mensaje = "Lugar Creado.";
		}catch (Exception $e) {
			$this->retorno->estado = false;
	        $this->retorno->datos = null;
	        $this->retorno->mensaje = "Error: ".$e->getMessage();
		}
		return $this->retorno;
	}

	public function read()
	{
		try{
			$sentenciaSQL = "SELECT * FROM lugar WHERE estado='A'";
	        $resultado = $this->miConexion->query($sentenciaSQL);
	        $this->retorno->estado = true;
	        $this->retorno->datos = $resultado;
	        $this->retorno->mensaje = "Datos del Lugar.";
		}catch(PDOException $e){
			$this->retorno->estado = false;
	        $this->retorno->datos = null;
	        $this->retorno->mensaje = "Error: " .$e->getMessage();
		}
	return $this->retorno;
	}
}


?>