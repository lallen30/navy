<?php 
/**
 * pdf generator lib
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_Form_Builder
 * @author    Softdiscover <info@softdiscover.com>
 * @copyright 2013 Softdiscover
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version   CVS: $Id: dompdflib_helper.php, v2.00 2013-11-30 02:52:40 Softdiscover $
 * @link      http://php-form-builder.zigaform.com/
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
use Dompdf\Dompdf;
function generate_pdf_old($html, $filename, $stream=TRUE)
{
    
require_once("dompdf/dompdf_config.inc.php");
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
if ($stream) {
    $dompdf->stream($filename.".pdf");
} else {
    write_file("./invoices_temp/invoice_$filename.pdf", $dompdf->output());
    }
}

function generate_pdf($html, $filename, $stream = TRUE) {

    require_once("dompdf/autoload.inc.php");
   
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('b4', 'portrait');
    $dompdf->set_option('isHtml5ParserEnabled', true);
    $dompdf->set_option('isRemoteEnabled', true);
    $dompdf->render();
    if ($stream) {
        $dompdf->stream($filename);
    } else {
        $output = $dompdf->output();
        
        $filename = Uiform_Form_Helper::sanitizeFileName($filename);
        $file_to_save = FCPATH . 'temp/' . $filename . '.pdf';
        file_put_contents($file_to_save, $output);
        $output = FCPATH . 'temp/' . $filename . '.pdf';
        return $output;
    }
}
