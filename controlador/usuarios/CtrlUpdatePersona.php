<?php 
	require_once '../../modelo/Conexion.php';
	require_once '../../modelo/usuarios/MdlPersona.php';
	require_once '../../entidad/usuarios/EntPersona.php';
	error_reporting(1);
    $retorno =array('array');
    $entPersona = new EntPersona();
	$entPersona->setIdMunicipioNacimiento($_POST["txtIdMunicipioNacimiento"]);
	$entPersona->setIdMunicipioResidencia($_POST["txtIdMunicipioResidencia"]);
	$entPersona->setIdTipoDocumento($_POST["txtIdTipoDocumento"]);
	$entPersona->setIdGrupoSanguineo($_POST["txtIdGrupoSanguineo"]);
	$entPersona->setIdGenero($_POST["txtIdGenero"]);
	$entPersona->setIdSede($_POST["txtIdSede"]);
	$entPersona->setIdEps($_POST["txtIdEps"]);
	$entPersona->setIdRegimen($_POST["txtIdRegimen"]);
	$entPersona->setPerNit($_POST["txtPerNit"]);
	$entPersona->setPerPrimerNombre($_POST["txtPerPrimerNombre"]);
	$entPersona->setPerSegundoNombre($_POST["txtPerSegundoNombre"]);
	$entPersona->setPerPrimerApellido($_POST["txtPerPrimerApellido"]);
	$entPersona->setPerSegundoApellido($_POST["txtPerSegundoApellido"]);
	$entPersona->setPerFechaNacimiento($_POST["txtPerFechaNacimiento"]);
	$entPersona->setPerTelefono($_POST["txtPerTelefono"]);
	$entPersona->setPerCelular($_POST["txtPerCelular"]);
	$entPersona->setPerCorreoElectronico($_POST["txtPerCorreoElectronico"]);
	$entPersona->setPerDireccion($_POST["txtPerDireccion"]);
	$entPersona->setPerFoto($_POST["txtPerFoto"]);	
    $MdlPersona =new MdlPersona();
    $resultado = $MdlPersona->updatePersona($entPersona);

    $retorno ["array"]=$resultado->datos->fetchAll();

    echo json_encode($retorno);
  	
	unset($entPersona);
	unset($MdlPersona);
 ?>