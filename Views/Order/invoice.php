
<?php

require_once ROOT_DIR . '/vendor/autoload.php';
$invoice = file_get_contents("http://localhost/AllForKidsWeb/invoice_content?order_id=". $_GET["order_id"]);
$style_sheet = file_get_contents($GLOBALS["AllForKids"]["home_url"] . "/assets/plugins/bootstrap/css/bootstrap.min.css");

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<style>' .$style_sheet.  '</style> ' . $invoice);
$mpdf->Output();