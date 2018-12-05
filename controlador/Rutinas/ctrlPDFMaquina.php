<?php
	session_start();
	require_once '../../mpdf/vendor/autoload.php';
	$estilos = file_get_contents('../../css/Rutinas/PDF.css');

	$mpdf = new \Mpdf\Mpdf();
	$mpdf->WriteHTML($estilos,1);
	$mpdf->WriteHTML('<img src="../../img/Rutinas/maquina.png">');
	$mpdf->WriteHTML('<br>');
	$mpdf->WriteHTML('<table>');
	$mpdf->WriteHTML('<thead><tr><th>Nombre</th><th>Codigo</th><th>Estado</th><th>Descripción</th></tr></thead>');
	$mpdf->WriteHTML('<tbody>');
	$mpdf->WriteHTML($_SESSION["DatosMaquina"]);
	$mpdf->WriteHTML('</tbody>');
	$mpdf->WriteHTML('</table>');

	$mpdf->Output();

 ?>