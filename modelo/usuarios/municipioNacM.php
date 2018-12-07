<?php  

class MunicipioM
{
	private $miConexion;
	private $retorno;
	function __construct()
	{
		$this->miConexion =  Conexion::Singleton();
		$this->retorno = new stdClass();
	}

	public function read($id)
	{
		try{
			$sentenciaSQL = "SELECT * FROM municipio INNER JOIN departamento ON municipio.idDepartamento=departamento.idDepartamento WHERE municipio.idDepartamento=?";
	        $resultado = $this->miConexion->prepare($sentenciaSQL);
	        $resultado->bindParam(1, $id);
	        $resultado->execute();
	        $this->retorno->estado = true;
	        $this->retorno->datos = $resultado;
	        $this->retorno->mensaje = "Datos del Municipio.";
	        
		}catch(PDOException $e){
			$this->retorno->estado = false;
	        $this->retorno->datos = null;
	        $this->retorno->mensaje = "Error: " .$e->getMessage();
		}
	return $this->retorno;
	}
}

?>