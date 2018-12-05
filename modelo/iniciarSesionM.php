<?php
/**
 * 
 */
class iniciarSesionM
{
	private $miConexion;
	private $retorno;

	function __construct()
	{
		
		$this->miConexion = Conexion::singleton();
		$this->retorno = new stdClass();
	}

	public function createSesion(iniciarSesionE $iniciarSesion)
	{
		//$resultado = null;
		try {
			$consulta = "SELECT * FROM usuariorol
						INNER JOIN usuario
						INNER JOIN persona
						ON usuariorol.idUsuario = usuario.idUsuario AND usuario.idPersona = persona.idPersona
						WHERE usuUsuario = ? AND usuPassword = ?";

			$resultado = $this->miConexion->prepare($consulta);
			$resultado->bindParam(1,$iniciarSesion->getUsuUsuario());
			$resultado->bindParam(2,$iniciarSesion->getUsuPassword());
			$resultado->execute();

			//echo $resultado;
			if($resultado->rowCount() > 0){
				$this->retorno->estado = true ;
				$this->retorno->datos = $resultado;
				$this->retorno->mensaje = "Inicio exitoso";
			}else{
				$this->retorno->estado = false ;
				$this->retorno->datos = $resultado;
				$this->retorno->mensaje = "Error";
			}

			

		} catch (PDOException $e) {
			$this->retorno->estado = false;
			$this->retorno->datos = null;
			$this->retorno->mensaje = "Error: " .$e->getMessage();
		}
		return $this->retorno;
	}
}
 ?>