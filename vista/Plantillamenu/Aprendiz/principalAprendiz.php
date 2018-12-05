<meta charset="utf-8">
<?php 
  session_start();

  if (isset($_SESSION['rolLogueado'])) {
    if ($_SESSION['rolLogueado'] != 4) {
      header('Location: ../../../index.php');
    }
  }else{
    header('Location: ../../../index.php');
  }
 ?>
  <div class="container section">
  <h4>Bienvenido Aprendiz <?php echo $_SESSION['nombreUnoLogueado'];?> <?php echo $_SESSION['nombreDosLogueado']; ?> <?php echo $_SESSION['apellidoUnoLogueado']; ?></h4>
  <br>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <div class="row">
      <a href="../../../Controlador/loginCerrar.php" class="teal-text">Cerrar Sesión</a>
  </div>
  </div>
