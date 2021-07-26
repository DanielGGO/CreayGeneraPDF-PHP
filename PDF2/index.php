<?php
require './vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf; //libreria de HTML2PDF

if(isset($_POST['crear'])){

//Integrar el contenido del archivo HTML
ob_start();//Buffer que recoge todo el contenido que devuelve el siguiente include
require_once 'pdfview.php';
$html = ob_get_clean();

$html2pdf = new html2pdf('P','A4','es','true','UTF-8');
$html2pdf -> writeHTML($html);
$html2pdf->output('pdf_generado_con_tusdatos.pdf');
}
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <form action="" method="POST" class="form">
    <input type="text" placeholder="Nombre" name="Nombre"/>
    <input type="text" placeholder="ApellidoPaterno" name="Ap"/>
    <input type="text" placeholder="ApellidoMaterno" name="App"/>
    <input type="text" placeholder="CorreoElectronico" name="Correo"/>
    <input type="text" placeholder="Telefono" name="telefono"/>
    <input type="submit" value="Crear un PDF" name="crear" class="button">
</form>
    </body>
</html>


