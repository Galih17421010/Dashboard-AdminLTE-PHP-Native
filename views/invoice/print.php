<?php 
require_once '../../assets/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$pdf = new Dompdf(array("enable_remote" => true));
ob_start();

require_once '../../views/invoice/index-print.php';
$file = ob_get_contents();
ob_get_clean();

$pdf->loadHtml($file);

$pdf->setPaper('A4','Potrait');
$pdf->render();
$pdf->stream('Data-Print.pdf',['Attachment'=>false]);

?>