<?php

require_once('php_lib/dompdf/dompdf_config.inc.php');

function doPDF($content=''){
    //Creamos el nombre del archivo.
    $path = 'reporte_'.date("d-m-Y_h-i-s_a").'.pdf'; // 12-03-2013 09_22am formato del nombre del pdf

    //Las opciones del papel del PDF.
    $paper_1='a4';
    $paper_2='portrait';

    $dompdf=new DOMPDF();
    $dompdf->set_paper($paper_1,$paper_2);
    $dompdf->load_html(utf8_encode($content));
    //ini_set("memory_limit","32M");//opcional
    $dompdf->render();

    //Lo guardamos en un directorio y lo mostramos
    file_put_contents('pdf/reportes/'.$path, $dompdf->output());

    return $path;
}
?>