<?php 
	/**
	 * 
	 */
	class Modelo
	{
		private $conexion;
		private $retorno;
		private $autocomplete;
		private $consulta;


		function __construct()
		{
			
			$this->conexion =  Conexion::singleton();
			$this->retorno = new stdClass();
			$this->consulta = new stdClass();
		}
		 function ConsultarPersonas(){
		 	try{
		 	$consulta = "SELECT * FROM usuario	WHERE estado = 'A'";
			$resultado5=$this->conexion->query($consulta); 	
	            $this->retorno->datos5 = $resultado5;  
			}catch(PDOException $e){
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
			 
		}
		 function ConsultarSaludable($AñoInicio,$AñoFin,$peso){
			try {
				$array = array();
				  $this->retorno->estado = false;
				for ($i=$AñoInicio; $i<=$AñoFin ; $i++) { 
					$consulta = "SELECT LEFT(fechaCreacion,4) AS fecha,COUNT(idRangoImc)as contador FROM `valoracion` WHERE fechaCreacion LIKE '$i%' AND idRangoImc=$peso ORDER BY fechaCreacion ASC";
					$result1 = $this->conexion->query($consulta);
					$result1 = $result1->fetchObject();

					if($result1->fecha!== null){
						$array[$i] = $result1;
					}
				}				
				$this->retorno->dato1 = $array; 
			} catch (Exception $e) {
				$this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}
		
		
		function ConsultarELBajoPeso($AñoInicio,$AñoFin,$peso){
			try {

				$array = array();
				$this->retorno->estado = false;
				for ($i=$AñoInicio; $i<=$AñoFin ; $i++) { 
					$consulta = "SELECT LEFT(fechaCreacion,4) AS fecha,COUNT(idRangoImc)as contador FROM `valoracion` WHERE fechaCreacion LIKE '$i%' AND idRangoImc=$peso ORDER BY fechaCreacion ASC";
					$result = $this->conexion->query($consulta);
					$result = $result->fetchObject();

					if($result->fecha !=null){
						$array[$i] = $result;
						$this->retorno->estado = true;
					}
				}				
				$this->retorno->dato = $array; 
			} catch (Exception $e) {
				$this->retorno->mensaje = "Error: " .$e->getMessage();
			}
			return $this->retorno;
		}
		function ConsultarSobrePeso($AñoInicio,$AñoFin,$peso){
			try{
				$array =  array();
				$this->retorno->estado = false;
				for ($i=$AñoInicio; $i<=$AñoFin; $i++) { 
					$consulta="SELECT LEFT(fechaCreacion,4) AS fecha, COUNT(idRangoImc) AS contador FROM valoracion WHERE fechaCreacion LIKE '$i%' AND idRangoImc = $peso ORDER BY fechaCreacion ASC";
				$resultado3= $this->conexion->query($consulta);	
			 	$resultado3= $resultado3->fetchObject();
				if ( $resultado3->fecha !=null){
					$array[$i] = $resultado3;
					$this->retorno->estado = true;
				}
			}

			$this->retorno->datos3 = $array;
			}catch (Exception $e){
				$this->retorno->mensaje = "Error: ".$e->getMessage();
			}
			return $this->retorno;
		}
		function ConsultarObesidad($AñoInicio,$AñoFin,$peso){
			$array = array();
			$this->retorno->estado = false;
			try{
			for ($i=$AñoInicio; $i<=$AñoFin ; $i++) { 
				$consulta="SELECT LEFT(fechaCreacion,4) AS fecha, COUNT(idRangoImc) as contador FROM valoracion WHERE fechaCreacion LIKE '$i%' AND idRangoImc= $peso ORDER BY fechaCreacion ASC";
				$resultado4 = $this->conexion->query($consulta);
				$resultado4 = $resultado4->fetchObject();
				if ($resultado4->fecha != null) {
					$array[$i] = $resultado4;
					$this->retorno->estado = true;
				}

			}
			$this->retorno->datos4 = $array;			
			}catch (Exception $e){
				$this->retorno->mensaje = "Error: ".$e->getMessage();
			}
			return $this->retorno;
		}
		function ConsultarReportePersonasBajoPeso(){
			try{
			$consulta = "SELECT perNit,CONCAT(perPrimerNombre,' ',perSegundoNombre,' ',perPrimerApellido,' ',perSegundoApellido) AS Nombre, idUsuario, idFicha, valPeso FROM persona INNER JOIN usuario As u ON u.idUsuario = persona.idPersona INNER JOIN aprendiz As a ON a.idAprendiz = persona.idPersona INNER JOIN valoracion AS v ON v.idValoracion = persona.idPersona WHERE persona.estado = 'A' AND v.idRangoImc = 1";
			$resultadoBajoPesoReport = $this->conexion->query($consulta);
			$this->retorno->DatoBajoPeso = $resultadoBajoPesoReport;
		}catch(PDOException $e){
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
		}
		return $this->retorno;
		}

		function ConsultarReportePersonasSaludable(){
			try{
				$array = array();
				for ($i=1; $i <= 4 ; $i++) { 
					$consulta = "SELECT perNit,perPrimerNombre,perSegundoNombre,perPrimerApellido,perSegundoApellido, ficNumero, valPeso FROM persona INNER JOIN usuario ON persona.idPersona = usuario.idPersona INNER JOIN registrogimnasio ON usuario.idUsuario = registrogimnasio.idUsuario INNER JOIN valoracion ON registrogimnasio.idRegistroGimnasio = valoracion.idRegistroGimnasio INNER JOIN aprendiz ON persona.idPersona = aprendiz.idPersona INNER JOIN ficha ON ficha.idFicha = aprendiz.idFicha WHERE persona.estado = 'A' AND valoracion.idRangoImc = $i";
					$resultadoSaludable = $this->conexion->query($consulta);
					$array[$i] = $resultadoSaludable->fetchAll(\PDO::FETCH_ASSOC);
				}
			
		}catch(PDOException $e){
	            $this->retorno->mensaje = "Error: " .$e->getMessage();
		}
		return $array;
		}
		public function estadistica1()
	{
		try {
			$sentenciaSql = "SELECT COUNT(*) AS cantidad FROM asistenciagimnasio AS AG INNER JOIN aprendiz AS A ON AG.idAprendiz = A.idAprendiz INNER JOIN persona AS P ON A.idPersona = P.idPersona INNER JOIN usuario AS U ON P.idPersona = U.idPersona INNER JOIN registrogimnasio AS RG ON U.idUsuario = RG.idUsuario INNER JOIN valoracion AS V ON RG.idRegistroGimnasio = V.idRegistroGimnasio WHERE V.valEdad BETWEEN 15 AND 20";
			$resultado = $this->conexion->query($sentenciaSql);
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

	public function estadistica2()
	{
		try {
			$sentenciaSql = "SELECT COUNT(*) AS cantidad FROM asistenciagimnasio AS AG INNER JOIN aprendiz AS A ON AG.idAprendiz = A.idAprendiz INNER JOIN persona AS P ON A.idPersona = P.idPersona INNER JOIN usuario AS U ON P.idPersona = U.idPersona INNER JOIN registrogimnasio AS RG ON U.idUsuario = RG.idUsuario INNER JOIN valoracion AS V ON RG.idRegistroGimnasio = V.idRegistroGimnasio WHERE V.valEdad BETWEEN 20 AND 25";
			$resultado = $this->conexion->query($sentenciaSql);
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

	public function estadistica3()
	{
		try {
			$sentenciaSql = "SELECT COUNT(*) AS cantidad FROM asistenciagimnasio AS AG INNER JOIN aprendiz AS A ON AG.idAprendiz = A.idAprendiz INNER JOIN persona AS P ON A.idPersona = P.idPersona INNER JOIN usuario AS U ON P.idPersona = U.idPersona INNER JOIN registrogimnasio AS RG ON U.idUsuario = RG.idUsuario INNER JOIN valoracion AS V ON RG.idRegistroGimnasio = V.idRegistroGimnasio WHERE V.valEdad BETWEEN 25 AND 30";
			$resultado = $this->conexion->query($sentenciaSql);
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

	public function estadistica4()
	{
		try {
			$sentenciaSql = "SELECT COUNT(*) AS cantidad FROM asistenciagimnasio AS AG INNER JOIN aprendiz AS A ON AG.idAprendiz = A.idAprendiz INNER JOIN persona AS P ON A.idPersona = P.idPersona INNER JOIN usuario AS U ON P.idPersona = U.idPersona INNER JOIN registrogimnasio AS RG ON U.idUsuario = RG.idUsuario INNER JOIN valoracion AS V ON RG.idRegistroGimnasio = V.idRegistroGimnasio WHERE V.valEdad > 30";
			$resultado = $this->conexion->query($sentenciaSql);
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
	public function ConsultarPersonasDeAsistencia(){
		try {
			$consulta = "SELECT perPrimerNombre,perSegundoNombre,perPrimerApellido,perSegundoApellido,ficNumero FROM asistenciagimnasio AS AG INNER JOIN aprendiz AS A ON AG.idAprendiz = A.idAprendiz INNER JOIN persona AS P ON A.idPersona = P.idPersona INNER JOIN usuario AS U ON P.idPersona = U.idPersona INNER JOIN registrogimnasio AS RG ON U.idUsuario = RG.idUsuario INNER JOIN valoracion AS V ON RG.idRegistroGimnasio = V.idRegistroGimnasio INNER JOIN ficha ON ficha.idFicha = A.idFicha WHERE V.estado= 'A' ORDER BY idAsistenciaGimansio DESC";
			$resultado = $this->conexion->query($consulta);
			$this->retorno->datos = $resultado;
		} catch (Exception $e) {
			$this->retorno->mensaje = "Error ".$e->getMessage();
		}
		return $this->retorno;
	}



	}

 ?>