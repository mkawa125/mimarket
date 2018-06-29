<?php
//============================================================+
// File name   : example_005.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 005 for TCPDF class
//               Multicell
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Multicell
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
//require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('mimarket');
$pdf->SetTitle('Order_Report');
$pdf->SetSubject('mimarkert monthly reports');
$pdf->SetKeywords('mimarket, PDF, report, orders, monthly');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 005', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 10);

// add a page
$pdf->AddPage();

// set cell padding
$pdf->setCellPaddings(1, 1, 1, 1);

// set cell margins
$pdf->setCellMargins(1, 1, 1, 1);

// set color for background
$pdf->SetFillColor(255, 255, 127);

// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)


$title = <<<OED
<h2>Mimarket user stores summary</h2>
OED;

$summary= <<<OED
<h4>Processed order summary</h4>
OED;

$contact= <<<OED
<h4 style="text-align: left">Customer Contacts Details</h4>
OED;

$products= <<<OED
<h4>Customer requested products</h4>
OED;
$pdf->writeHTMLCell(0,0,'', '' ,$title,0,1,0,true,'C',true);

foreach ($productOrders->result() as $products){
    $pdf->writeHTMLCell(0,0,'', '' ,$contact,0,1,0,true,'C',true);

//    $details = '<div class="col-sm-6" style="text-align: left; font-size: medium">
//            <label><strong>Order name: </strong>'. $products->ProductName .'</label><br>
//            <label><strong>Date Placed: </strong>'. $products->ProductName.'</label><br>
//            <label><strong>Expected Date: </strong>'. $products->ProductName.'</label><br>
//            <label><strong>Customer Name: </strong>'. $products->ProductName.'</label><br>
          
            
            
//</div>';

    $pdf->writeHTMLCell(0,0,'','',$details,0, 1,0,true,'C', true);

    $table2  = '<table class="table table-stripped" style="padding: 10px;">';
    $table2 .='<thead>';
    $table2.= '<tr style="background-color: #00A8B3">
                <th style="border: solid 1px #BDBDBD">No</th>
                <th style="border: solid 1px #BDBDBD">ProductName</th>
                <th style="border: solid 1px #BDBDBD">Quantity</th>
               
            
           </tr>';
    $table2 .= '</thead>';
    $num = 1;

    foreach ($orderedMost->result() as $order){
        $table2 .='<tr style="padding: ">
            <td style="border: solid 1px #BDBDBD; padding: 8px">'.$num++. '</td>
            <td style="border: solid 1px #BDBDBD; padding: 8px">'.$productOrders->ProductName. '</td>
            <td style="border: solid 1px #BDBDBD; padding: 8px">'.$productOrders->num_rows(). '</td>
            <td style="border: solid 1px #BDBDBD; padding: 8px">'.$productOrders->product_quantity. '</td>
        </tr>';
    }

    $table2 .='</table>';

    $pdf->writeHTMLCell(0,0,'','',$products,0, 1,0,true,'C', true);

    $pdf->writeHTMLCell(0,0,'','',$table2,0, 1,0,true,'C', true);
}

$total_cost = 0;
$num = 1;
$table  = '<table class="table table-stripped" style="padding: 10px">';
$table .='<thead>';
$table.= '<tr style="background-color: whitesmoke">
                <th style="border: solid 1px #BDBDBD">No</th>
                <th style="border: solid 1px #BDBDBD">Name</th>
                <th style="border: solid 1px #BDBDBD">Visitors</th>
                <th style="border: solid 1px #BDBDBD">Orders</th>
                <th style="border: solid 1px #BDBDBD">Total Products</th>
           </tr>';
$table .= '</thead>';

foreach ($enterprises->result() as $enterprise){

    $table .='<tr style="padding: ">
            <td style="border: solid 1px #BDBDBD; padding: 8px">'.$num++. '</td>
            <td style="border: solid 1px #BDBDBD; padding: 8px">'.$enterprise->name. '</td>
            <td style="border: solid 1px #BDBDBD; padding: 8px">'.$enterprise->enterprise_visitors. '</td>
            <td style="border: solid 1px #BDBDBD; padding: 8px">'.$enterprise->enterprise_orders. '</td>
            <td style="border: solid 1px #BDBDBD; padding: 8px">'.$enterprise->total_products. '</td>

        </tr>';
}
$table .='<tr>
            <td style="border: solid 1px #BDBDBD; padding: 8px" align="right" colspan="5"><strong>Total Order Cost: ' . number_format($total_cost, 2) .'</strong><label> TZS</label></td>
           </tr>';

$table .='</table>';
$pdf->writeHTMLCell(0,0,'', '' ,$summary,0,1,0,true,'C',true);

$pdf->writeHTMLCell(0,0,'','',$table,0, 1,0,true,'C', true);



// move pointer to last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
ob_clean();
$pdf->Output('order_report.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+

//============================================================+
// END OF FILE
//============================================================+
