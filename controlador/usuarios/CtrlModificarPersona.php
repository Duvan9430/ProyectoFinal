<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/usuarios/MdlPersona.php';
	require_once '../../entidad/usuarios/EntPersona.php';
	error_reporting(1);
	$retorno = array('mensaje');
	$entPersona = new EntPersona();
	$entPersona->setIdPersona($_POST['txtIdPersonaModal']);
	$entPersona->setIdMunicipioNacimiento($_POST['txtIdMunicipioNacimientoModal']);
	$entPersona->setIdMunicipioResidencia($_POST['txtIdMunicipioResidenciaModal']);
	$entPersona->setIdTipoDocumento($_POST['txtIdTipoDocumentoModal']);
	$entPersona->setIdGrupoSanguineo($_POST["txtIdGrupoSanguineoModal"]);
	$entPersona->setIdGenero($_POST['txtIdGeneroModal']);
	$entPersona->setIdSede($_POST['txtIdSedeModal']);
	$entPersona->setIdEps($_POST['txtIdEpsModal']);
	$entPersona->setIdRegimen($_POST['txtIdRegimenModal']);
	$entPersona->setPerNit($_POST["txtPerNitModal"]);
	$entPersona->setPerPrimerNombre($_POST["txtPerPrimerNombreModal"]);
	$entPersona->setPerSegundoNombre($_POST["txtPerSegundoNombreModal"]);
	$entPersona->setPerPrimerApellido($_POST["txtPerPrimerApellidoModal"]);
	$entPersona->setPerSegundoApellido($_POST["txtPerSegundoApellidoModal"]);
	$entPersona->setPerFechaNacimiento($_POST["txtPerFechaNacimientoModal"]);
	$entPersona->setPerCelular($_POST["txtPerCelularModal"]);
	$entPersona->setPerCorreoElectronico($_POST["txtPerCorreoElectronicoModal"]);
	$entPersona->setPerDireccion($_POST["txtPerDireccionModal"]);


	$MdlPersona = new MdlPersona();
	$resultado = $MdlPersona->updatePersona($entPersona);
	$retorno["mensaje"] = $resultado->mensaje;


	unset($entPersona);
	unset($MdlPersona);

	echo json_encode($retorno);
 ?>


 
