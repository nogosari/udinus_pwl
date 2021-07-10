<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(dirname(__FILE__) . '/dompdf/autoload.inc.php');

class Pdf
{
    function generatePDF($html, $filename='', $download=TRUE){
        $dompdf = new Dompdf\Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->set_option('isRemoteEnabled', TRUE);
        $dompdf->setPaper('A4','landscape');
        $dompdf->render();
        if ($download) {
            $dompdf->stream($filename.'.pdf',array('Attachment'=>1));
        }else{
            $dompdf->stream($filename.'.pdf',array('Attachment'=>0));
        }
        
    }
}
?>