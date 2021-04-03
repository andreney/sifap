<?php
/**
 * Cria um documento PDF de declaração ao estagiário usando a classe TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Classe Nicola Asuni
 * @since 2008-03-04
 * @developer Andreney Laranjeira
 * @date create 2019-07-15
 */
// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file = K_PATH_IMAGES.'marca_gov.png';
		$this->Image($image_file, 10, 7, 60, '', 'PNG', '', 'T', false, 300, 'C', false, false, 0, false, false, false);
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        $image_file = K_PATH_IMAGES.'rodape_governo.png';
		$this->Image($image_file, 10, 262, 210, '', 'PNG', '', 'T', false, 300, 'C', false, false, 0, false, false, false);
    }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Andreney Laranjeira');
$pdf->SetTitle('Relatório');
$pdf->SetSubject('Relatório');
$pdf->SetKeywords('Relatório, Emitir');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

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

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('helvetica', '', 9, '', true);


// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
//$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print
//$pdf->line(20, 50, 190, 50);

$html = "";

// Imprimir linhas no final do documento
$linha_formatada = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));
//$pdf->Line(30, 218, 100, 218, $linha_formatada); //Linha primeira assinatura
//$pdf->Line(115, 218, 185, 218, $linha_formatada); //Linha segunda assinatura
//$pdf->Line(70, 218, 140, 218, $linha_formatada); //Linha no meio para uma assinatura
//$pdf->Text(22, 252, 'Gerência de Gestão de Pessoal');
//$pdf->Text(140, 252, 'Assinatura do Funcionário');

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
ob_clean();
$pdf->Output('perfume_relatorio.pdf', 'I');
end_ob_clean();

//============================================================+
// END OF FILE
//============================================================+