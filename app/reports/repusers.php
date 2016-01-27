<?php

require_once('fpdf/fpdf.php');
require_once '../../app/start.php';
//require_once('report.php');

header('charset=ISO-8859-1');

$pdf = new FPDF("P", "pt", "A4");

//CABEÇARIO
$pdf->AddPage();
$pdf->Image('../../img/logoD.png');
$pdf->SetFont('arial', 'B', 18);
$pdf->Cell(0, 10, "LISTA DE USUARIOS", 0, 1, 'C');
$pdf->Ln(4);
$pdf->SetFont('arial', 'B', 10);
$pdf->Cell(0, 10, date("d/m/Y"), 0, 1, 'L');
$pdf->Cell(0, 5, "", "B", 1, 'C');
$pdf->Ln(8);


//CORPO DA PAGIAN
$users = $db->prepare("SELECT id, name, level, active FROM users ORDER BY level, active");
$users->execute();

foreach ($users as $user) {
   $pdf->ln(5);
    $pdf->SetFont('arial', 'B', 12);
    $pdf->Cell(70, 20, "Depart.:", 0, 0, 'L');
    $pdf->setFont('arial', '', 12);
    $pdf->Cell(0, 20, utf8_decode($user['id']), 0, 1, 'L');

    //nome
    $pdf->SetFont('arial', 'B', 12);
    $pdf->Cell(70, 20, "Nome:", 0, 0, 'L');
    $pdf->setFont('arial', '', 12);
    $pdf->Cell(0, 20, utf8_decode($user['name']) , 0, 1, 'L');



    //email
    $pdf->SetFont('arial', 'B', 12);
    $pdf->Cell(70, 20, "E-mail:", 0, 0, 'L');
    $pdf->setFont('arial', '', 12);
    $pdf->Cell(0, 20, utf8_decode($user['name']), 0, 1, 'L');
}

//RODAPÉ
$pdf->Cell(0, 5, "", "B", 1, 'C');
$pdf->SetFont('arial', 'B', 12);
$pdf->Ln(4);

$pdf->Output();
