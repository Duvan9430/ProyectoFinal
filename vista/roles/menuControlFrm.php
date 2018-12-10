<?php
	session_start();
	if($_SESSION['rolLogueado'] == 1){
		print '
		   	<div class="row">
		      	<div class="col s6">
		        	<div class="card">
		         		<div class="card-image">
		            		<img src="../img/IMC.PNG">
		          		</div>
		          		<div class="card-action">
		            		<center><a class="btn botonMenu" id="btnIMCM" name="btnIMCM">IMC</a></center>
		          		</div>
		        	</div>
		      	</div>
		      	<div class="col s6">
		        	<div class="card">
		          		<div class="card-image">
		            		<a title="Consultar Maquinas"><img src="../img/asistencia.png"/></a>
		          		</div>
		          		<div class="card-action">
		            		<center><a class="btn botonMenu" id="btnAsisMaqM" name="btnAsisMaqM">Asistencia Y Maquinas</a></center>
		          		</div>
		        	</div>
		      	</div>
		      	<div class="col s6">
		        	<div class="card">
		          		<div class="card-image">
		            		<img src="../img/ejercicio.jpg">
		          		</div>
		          		<div class="card-action">
		            		<center><a class="btn botonMenu" id="btnEjerciciosM" name="btnEjerciciosM">Ejercicios</a></center>
		          		</div>
		        	</div>
		     	</div>
		      	<div class="col s6">
		        	<div class="card">
		          		<div class="card-image">
		            		<img src="../img/musculo.png">
		          		</div>
		          		<div class="card-action">
		            		<center><a class="btn botonMenu" id="btnMusculoM" name="btnMusculoM">Musculo</a></center>
		          		</div>
		        	</div>
		      	</div>
		      	<div class="col s6">
		        	<div class="card">
		          		<div class="card-image">
		            		<img src="../img/ejercicio musculo.jpg">
		          		</div>
		          		<div class="card-action">
		            		<center><a class="btn botonMenu" id="btnEjerMusM" name="btnEjerMusM">Ejercicio Musculo</a></center>
		          		</div>
		        	</div>
		      	</div>
		      	<div class="col s6">
		        	<div class="card">
		          		<div class="card-image">
		            		<img src="../img/correo.jpg">
		          		</div>
		          		<div class="card-action">
		           			<center><a class="btn botonMenu" id="btnCorreoM" name="btnCorreoM">Enviar Correo</a></center>
		          		</div>
		        	</div>
		      	</div>  
		      	<div class="col s6">
		        	<div class="card">
		          		<div class="card-image">
		            		<img src="../img/reporteEstadisticas.png">
		          		</div>
		          		<div class="card-action">
		           			<center><a class="btn botonMenu" id="btnEstadisticaM" name="btnEstadisticaM">Estadistícas</a></center>
		          		</div>
		        	</div>
		      	</div>
		      	<div class="col s6">
		        	<div class="card">
		         		<div class="card-image">
		            		<img src="../img/mi rutina.jpg">
		          		</div>
		          		<div class="card-action">
		            		<center><a class="btn botonMenu" id="btnRutinasGeneralM" name="btnRutinasGeneralM">Rutinas</a></center>
		          		</div>
		        	</div>
		      	</div>
		      	<div class="col s6">
		        	<div class="card">
		         		<div class="card-image">
		            		<img src="../img/mi rutina.jpg">
		          		</div>
		          		<div class="card-action">
		            		<center><a class="btn botonMenu" id="btnClasificacionEjercicioM" name="btnClasificacionEjercicioM">Clasificacion Ejercicio</a></center>
		          		</div>
		        	</div>
		      	</div>      
	    	</div>
	    ';
	}else if($_SESSION['rolLogueado'] == '4'){
		print '	<div class="row">
					<div class="col s6">
		        		<div class="card">
		         			<div class="card-image">
		            			<img src="../img/mi rutina.jpg">
		          			</div>
		          			<div class="card-action">
		            			<center><a class="btn botonMenu" id="btnRutinasAprendizM" name="btnRutinasAprendizM">Mis Rutinas</a></center>
		          			</div>
		        		</div>
		      		</div>
		      	</div>
		    ';

	}else if($_SESSION["rolLogueado"] == '3'){
		print '
		   	<div class="row">
		      	<div class="col s6">
		        	<div class="card">
		         		<div class="card-image">
		            		<img src="../img/IMC.PNG">
		          		</div>
		          		<div class="card-action">
		            		<center><a class="btn botonMenu" id="btnIMCM" name="btnIMCM">IMC</a></center>
		          		</div>
		        	</div>
		      	</div>
		      	<div class="col s6">
		        	<div class="card">
		          		<div class="card-image">
		            		<a title="Consultar Maquinas"><img src="../img/asistencia.png"/></a>
		          		</div>
		          		<div class="card-action">
		            		<center><a class="btn botonMenu" id="btnAsisMaqM" name="btnAsisMaqM">Asistencia Y Maquinas</a></center>
		          		</div>
		        	</div>
		      	</div>
		      	<div class="col s6">
		        	<div class="card">
		          		<div class="card-image">
		            		<img src="../img/ejercicio.jpg">
		          		</div>
		          		<div class="card-action">
		            		<center><a class="btn botonMenu" id="btnEjerciciosM" name="btnEjerciciosM">Ejercicios</a></center>
		          		</div>
		        	</div>
		     	</div>
		      	<div class="col s6">
		        	<div class="card">
		          		<div class="card-image">
		            		<img src="../img/musculo.png">
		          		</div>
		          		<div class="card-action">
		            		<center><a class="btn botonMenu" id="btnMusculoM" name="btnMusculoM">Musculo</a></center>
		          		</div>
		        	</div>
		      	</div>
		      	<div class="col s6">
		        	<div class="card">
		          		<div class="card-image">
		            		<img src="../img/ejercicio musculo.jpg">
		          		</div>
		          		<div class="card-action">
		            		<center><a class="btn botonMenu" id="btnEjerMusM" name="btnEjerMusM">Ejercicio Musculo</a></center>
		          		</div>
		        	</div>
		      	</div>
		      	<div class="col s6">
		        	<div class="card">
		          		<div class="card-image">
		            		<img src="../img/correo.jpg">
		          		</div>
		          		<div class="card-action">
		           			<center><a class="btn botonMenu" id="btnCorreoM" name="btnCorreoM">Enviar Correo</a></center>
		          		</div>
		        	</div>
		      	</div>  
		      	<div class="col s6">
		        	<div class="card">
		          		<div class="card-image">
		            		<img src="../img/reporteEstadisticas.png">
		          		</div>
		          		<div class="card-action">
		           			<center><a class="btn botonMenu" id="btnEstadisticaM" name="btnEstadisticaM">Estadistícas</a></center>
		          		</div>
		        	</div>
		      	</div>
		      	<div class="col s6">
		        	<div class="card">
		         		<div class="card-image">
		            		<img src="../img/mi rutina.jpg">
		          		</div>
		          		<div class="card-action">
		            		<center><a class="btn botonMenu" id="btnRutinasGeneralM" name="btnRutinasGeneralM">Rutinas</a></center>
		          		</div>
		        	</div>
		      	</div>
		      	<div class="col s6">
		        	<div class="card">
		         		<div class="card-image">
		            		<img src="../img/mi rutina.jpg">
		          		</div>
		          		<div class="card-action">
		            		<center><a class="btn botonMenu" id="btnClasificacionEjercicioM" name="btnClasificacionEjercicioM">Clasificacion Ejercicio</a></center>
		          		</div>
		        	</div>
		      	</div>  
	    	</div>
		';
	}
?>