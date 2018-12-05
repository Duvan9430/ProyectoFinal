<?php
	// Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require_once '../../modelo/Conexion.php';
    require_once '../../modelo/Rutinas/MdlCorreo.php';
    //Load Composer's autoloader
    require '../../phpmailer/vendor/autoload.php';

    $estado = array();
    $mensaje = array();
    $retorno = array();
    $mdlCorreo = new MdlCorreo();
	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
		//Configuracion Servidor
		$mail->SMTPDebug = 0;                                 // Enable verbose debug output
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'gimnasioebg@gmail.com';                 // SMTP username
		$mail->Password = 'gimnasiosena';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;
		                                    // TCP port to connect to

		//Destinatarios
		$mail->setFrom('gimnasioebg@gmail.com', 'Gimnasio Ebg SENA');
		
		$destinatarios = $mdlCorreo->consultarCorreos();
		$destinatarios = $destinatarios->datos->fetchAll(PDO::FETCH_ASSOC);
		/*foreach ($destinatarios as $index => $correo) {
			$mail->addAddress($correo["perCorreoElectronico"]);
		}*/

		$mail->addAddress('jjsanchez11@misena.edu.co');     // Añadir un destinatario
		//$mail->addReplyTo('info@example.com', 'Information');
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');

		//Archivos
		$archivos = array();

		if($_FILES["Archivo"]["name"] != [""]){
			foreach($_FILES['Archivo']['name'] as $index => $nombre) {
			    $mail->addAttachment($_FILES["Archivo"]["tmp_name"][$index],$_FILES["Archivo"]["name"][$index]);            
			}
		}

		//Contenido
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = $_POST["Asunto"];
		$mail->Body    = $_POST["Descripcion"];
		$mail->AltBody = $_POST["Descripcion"];

		$mail->send();
		   
		$retorno["estado"] = 'Mensaje Enviado';
		
	} catch (phpmailerException  $e) {
		$estado = "Error al enviar correo: ".$e->getMessage();
	}

	echo json_encode($retorno);
?>