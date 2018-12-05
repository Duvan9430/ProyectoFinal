<!DOCTYPE html>
<html>
<head>
	<title>Crear Rutina</title>
	<link rel="stylesheet" type="text/css" href="../../css/Librerias/bitnami.css">
	<link rel="stylesheet" type="text/css" href="../../css/Librerias/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/Rutinas/frmCrearRutina.css">
</head>
<body>
	
<header>
	
</header>

<nav>
   <!-- Fixed Masonry Filters -->
   <div class="categories-wrapper z-depth-4">
   <div class="categories-container">
       <ul class="categories container">
       		<img src="../../img/Rutinas/ebg.png" class="logo right">
           <li class="active"><a href="#all"></a></li>
       </ul>
   </div>
   </div>
</nav>

	
	<div class="container " id="contenido">
		&nbsp
		<div class="card">
			<div class="card-body">
				<center><span class="header" style="font-family: verdana; font-size:270%; ">Crear Rutina  </span></center>
				
				<form id="frmCrearRutinas">
					<div class="row ">
						<div class="row">
							<div class="col s3"></div>
							<div class="col s5 m6 estilo" id="selectClasificacion"></div>
							<div class="col s3"></div>
						</div>
						
						<div class="row">
							<div class="col s3"></div>	
							<div class="input-field col s6">
							 	<input id="nombreRutina" name="nombreRutina" type="text" class="validate">
							 	<label for="nombreRutina" style="font-family: verdana;">Nombre de Rutina</label>
							</div>
							<div class="col s3"></div>
						</div>

						
						<div class="row">
							<div class="col s3"></div>
							<div class="col s6">
								<label>Ejercicios:</label>
							    <select class="browser-default" multiple id="selectEjercicios">
							      
							    </select>
							</div>
							<div class="col s3"></div>
						</div>

						<div class="row valign center">
	                 		<a class="waves-effect waves-light btn" id="btnCrearRutina">Crear</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	  <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Energy Body Gym</h5>
               
              </div>
             
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
    			    <a href="http://www.sena.edu.co/" target="_blank" class="grey-text text-lighten-4 left">
       				  <h6>&nbsp;&nbsp;© ADSI 1466435</h6>
      			  </a>

          		<a href="http://www.sena.edu.co/" target="_blank" class="grey-text text-lighten-4 right">
       					<img src="../../img/Rutinas/logo.png" width="40px" height="40px">
       				</a>
              
              &nbsp;

       			  <a href="http://oferta.senasofiaplus.edu.co/" target="_blank" class="grey-text text-lighten-4 right">
       					<img src="../../img/Rutinas/developers-V2.png" width="55px" height="46px">
      			  </a>
            </div>
          </div>
        </footer>




	<script type="text/javascript" src="../../js/Librerias/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../../js/Rutinas/frmCrearRutina.js"></script>
	<script type="text/javascript" src="../../js/Librerias/materialize.min.js"></script>
</body>
</html>
