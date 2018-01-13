<?php
    require_once __DIR__ . '/lib/vendor/autoload.php';

    $mpdf = new \Mpdf\Mpdf();
    $css= file_get_contents('css/reporteDisenio.css');
    $html='';
    $mpdf->writeHTML($css, 1);
    $mpdf->WriteHTML($html);
    $mpdf->Output('reporte.pdf', 'I');
?>
