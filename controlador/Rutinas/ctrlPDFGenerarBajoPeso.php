<?php 
	session_start();
	require_once '../../mpdf/vendor/autoload.php';
	$estilos = file_get_contents('../../css/Rutinas/PDF.css');

	$mpdf = new \Mpdf\Mpdf();
	$mpdf->WriteHTML($estilos,1);
	$mpdf->WriteHTML('<img src="../../img/Rutinas/Estadistica/bajoPeso.png">');
	$mpdf->WriteHTML('<br>');
	$mpdf->WriteHTML('<table>');
	$mpdf->WriteHTML('<thead><tr><th>Documento de identificación</th><th>Nombre</th><th>Número de ficha<th>Peso</th></tr></thead>');
	$mpdf->WriteHTML('<tbody>');
	$mpdf->WriteHTML($_SESSION["ConsultarBajoPeso"]);
	$mpdf->WriteHTML('</tbody>');
	$mpdf->WriteHTML('</table>');

	$mpdf->Output();
 ?>