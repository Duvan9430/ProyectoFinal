<?php 
	if($_SESSION['rolLogueado'] == 1){
		print '
			<li><a class="waves-effect waves-teal" id="btnAprendiz" name="btnAprendiz"><i class="material-icons">person</i>Aprendiz</a></li>
			<li><a class="waves-effect waves-orange" id="btnGimnasio" name="btnGimnasio"><i class="material-icons">fitness_center</i>Gimnasio</a></li>
			<li><a class="waves-effect waves-green" id="btnControl" name="btnControl"><i class="material-icons">games</i>Control</a></li>
			<li><a class="waves-effect waves-orange" id="btnEventos" name="btnEventos"><i class="material-icons">event</i>Eventos</a></li>
			&nbsp
			<li><a class="waves-effect waves-red top" href="../controlador/loginCerrar.php" id="btnCerrarSesionM"><i class="material-icons">power_settings_new</i>Cerrar Sesión</a></li>
		';
	}else if($_SESSION['rolLogueado'] == 4){
		print '
			<li><a class="waves-effect waves-green" id="btnControl" name="btnControl"><i class="material-icons">games</i>Control</a></li>
			<li><a class="waves-effect waves-orange" id="btnEventos" name="btnEventos"><i class="material-icons">event</i>Eventos</a></li>
			&nbsp
			<li><a class="waves-effect waves-red top" href="../controlador/loginCerrar.php" id="btnCerrarSesionM"><i class="material-icons">power_settings_new</i>Cerrar Sesión</a></li>
		';
	}else if($_SESSION['rolLogueado'] == 2){
		print '
			<li><a class="waves-effect waves-orange" id="btnEventos" name="btnEventos"><i class="material-icons">event</i>Eventos</a></li>
			&nbsp
			<li><a class="waves-effect waves-red top" href="../controlador/loginCerrar.php" id="btnCerrarSesionM"><i class="material-icons">power_settings_new</i>Cerrar Sesión</a></li>
		';
	}else if($_SESSION['rolLogueado'] ==3){
		print '
			<li><a class="waves-effect waves-teal" id="btnAprendiz" name="btnAprendiz"><i class="material-icons">person</i>Aprendiz</a></li>
			<li><a class="waves-effect waves-orange" id="btnGimnasio" name="btnGimnasio"><i class="material-icons">fitness_center</i>Gimnasio</a></li>
			<li><a class="waves-effect waves-green" id="btnControl" name="btnControl"><i class="material-icons">games</i>Control</a></li>
			&nbsp;
			<li><a class="waves-effect waves-red top" href="../controlador/loginCerrar.php" id="btnCerrarSesionM"><i class="material-icons">power_settings_new</i>Cerrar Sesión</a></li>
		';
	}
?>