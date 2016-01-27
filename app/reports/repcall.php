<?php

require_once('fpdf/fpdf.php');
require_once '../../app/start.php';
//require_once('report.php');

header('charset=ISO-8859-1');

$pdf = new FPDF("P", "pt", "A4");

$pdf->AddPage();
$pdf->Image('../../img/logoD.png');
/*
$pdf->SetFont('arial', 'B', 18);
$pdf->Cell(0, 10, "RELATORIO DE ATENDIMENTO", 0, 1, 'C');
$pdf->Cell(0, 5, "", "B", 1, 'C');
$pdf->Ln(8);


if (isset($_GET)) {

    // CARREGANDO AS INFORMAÇÕES
    $call = $db->prepare("SELECT s.name name, s.email email, s.fone fone, d.name depart, c.*  FROM calls c INNER JOIN depart d ON d.id = c.depart_id INNER JOIN clients s ON s.id = c.client_id WHERE c.id = ? ");
    $call->bindParam(1, $_GET['id'], PDO::PARAM_INT);
    $call->execute();
    $call = $call->fetch(PDO::FETCH_ASSOC);

    $actions = $db->prepare("SELECT * FROM actions a INNER JOIN users u ON u.id = a.user_id WHERE call_id = ?");
    $actions->bindParam(1, $_GET['id'], PDO::PARAM_INT);
    $actions->execute();

    $nome = $call['name'];
    $email = $call['email'];
    $depart = $call['depart'];
    $fone = $call['fone'];
    $description = $call['description'];
    $solution = '';
    
    foreach ($actions as $action) {
        $solution .= ($action['desc_act']);
    }

    //depart
    $pdf->SetFont('arial', 'B', 12);
    $pdf->Cell(70, 20, "Depart.:", 0, 0, 'L');
    $pdf->setFont('arial', '', 12);
    $pdf->Cell(0, 20, utf8_decode($depart), 0, 1, 'L');

    //nome
    $pdf->SetFont('arial', 'B', 12);
    $pdf->Cell(70, 20, "Nome:", 0, 0, 'L');
    $pdf->setFont('arial', '', 12);
    $pdf->Cell(0, 20, $nome . ' / ' . $fone, 0, 1, 'L');



    //email
    $pdf->SetFont('arial', 'B', 12);
    $pdf->Cell(70, 20, "E-mail:", 0, 0, 'L');
    $pdf->setFont('arial', '', 12);
    $pdf->Cell(0, 20, $email, 0, 1, 'L');


    //descrição do problema
    $pdf->ln(15);
    $pdf->SetFont('arial', 'B', 12);
    $pdf->Cell(0, 10, "Problema Levantado:", 0, 1, 'L');
    $pdf->Cell(0, 5, "", "B", 1, 'C');
    $pdf->setFont('arial', '', 12);
    $pdf->MultiCell(0, 20, $description, 0, 'J');
    
    //ações adotadas
    $pdf->ln(15);
    $pdf->SetFont('arial', 'B', 12);
    $pdf->Cell(0, 10,  utf8_decode("Solução adotada / Observações:"), 0, 1, 'L');
    $pdf->Cell(0, 5, "", "B", 1, 'C');
    $pdf->setFont('arial', '', 12);
    $pdf->MultiCell(0, 20, utf8_decode($solution), 0, 'J');
    
//} else {

    $pdf->ln(10);
//Observações
    $pdf->SetFont('arial', 'B', 12);
    $pdf->Cell(70, 20, "ERRO AO CARREGAR RELATORIO", 0, 1, 'L');
//}*/

//RODAPÉ
$pdf->SetFont('arial', 'B', 12);
$pdf->Cell(0, 5, "", "B", 1, 'C');
$pdf->Cell(0, 33, "________________________________", 0, 1, 'C');
$pdf->SetFont('arial', 'B', 8);
$pdf->Cell(0, 0, "ASSINATURA / CARIMBO", 0, 1, 'C');


$pdf->Output();
