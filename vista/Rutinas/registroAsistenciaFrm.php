<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Asistencia Gym | Proyecto</title>
	<link rel="stylesheet" type="text/css" href="../../css/Librerias/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/Librerias/bitnami.css">
	<link rel="stylesheet" type="text/css" href="../../css/Rutinas/asistencia.css">
</head>
<body>
	<div class="slider fullscreen effect">
    <ul class="slides">
      <li>
        <img src="../../img/Rutinas/Asistencia/uno.jpg" class="responsive-img">
      </li>
      <li>
        <img src="../../img/Rutinas/Asistencia/dos.jpg" class="responsive-img">
      </li>
      <li>
        <img src="../../img/Rutinas/Asistencia/tres.jpg" class="responsive-img">
      </li>
      <li>
        <img src="../../img/Rutinas/Asistencia/cuatro.jpg" class="responsive-img">
      </li>
      <li>
        <img src="../../img/Rutinas/Asistencia/cinco.jpg" class="responsive-img">
      </li>
    </ul>
  </div>
	<div class="container" id="contenido">
		<div class="row">
			<div class="col s3"></div>
			<div class="col s6">
				<div class="card hoverable div-hijo">
					<div class="card-body">
						<div class="container">
							<form id="frmAsistencia">
								<div class="row">
									<h6 class="header"><b>Asistencia</b></h6>
									<div id="Login">
										<div class="input-field">
											<input type="number" name="perNit" id="perNit" placeholder="N° identificación" class="autocomplete" required="">
											<span>¿No tienes Usuario? <a href="#">Comunícate con tu profesional de apoyo gym más cercano.</a></span>
											<div id="Barra"></div>
										</div>
										<button type="submit" class="waves-effect waves-light btn right" id="btnEnviar">Enviar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col s3"></div>
		</div>
	</div>


	<footer>
		<a class="right" href="#">©2018 Proyecto</a>
    </footer>

	<script type="text/javascript" src="../../js/Librerias/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../../js/Librerias/materialize.min.js"></script>
	<script type="text/javascript" src="../../js/Rutinas/registroAsistenciaFrm.js"></script>
	<!-- <script type="text/javascript" src="../js/iniciosesion.js"></script> -->
</body>
</html>