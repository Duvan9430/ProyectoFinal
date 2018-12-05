<?php 	

  session_start();
  $_SESSION["ConsultarObesidad"]= $_POST["ConsultarObesidades"];
  $retorno["estado"] = $_POST["ConsultarObesidades"];
  echo json_encode($retorno);

 ?>