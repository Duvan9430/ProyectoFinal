<?php  
/**
 * 
 */
class GeneroTorneoM
{
	private $miConexion;
	private $retorno;
	function __construct()
	{
		$this->miConexion =  Conexion::Singleton();
		$this->retorno = new stdClass();
	}

	public function read()
	{
		try{
			$sentenciaSQL = "SELECT * FROM generotorneo WHERE estado= 'A'";
	        $resultado = $this->miConexion->query($sentenciaSQL);
	        $this->retorno->estado = true;
	        $this->retorno->datos = $resultado;
	        $this->retorno->mensaje = "Datos del Genero del Torneo.";
		}catch(PDOException $e){
			$this->retorno->estado = false;
	        $this->retorno->datos = null;
	        $this->retorno->mensaje = "Error: " .$e->getMessage();
		}
	return $this->retorno;
	}
}

?>