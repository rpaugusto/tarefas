<?php

require_once('fpdf/fpdf.php');

class PDF extends FPDF {

    function Header() {
        // Logo
        $this->Image('../../img/logoD.png', 10, 6, 30);
        $pdf->SetFont('arial', 'B', 18);
        $pdf->Cell(0, 5, "RELATORIO DE ATENDIMENTO", 0, 1, 'C');
        $pdf->Cell(0, 5, "", "B", 1, 'C');
        $this->Ln(10);
    }

    function Footer($data = FALSE) {

        $this->SetY(-15);
        $this->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 5, "", "B", 1, 'C');
        if ($data) {
            $pdf->Cell(0, 40, date("d/m/Y"), 0, 1, 'L');
            $pdf->Cell(120, 40, "__________________________________", 0, 1, 'C');
            $pdf->Cell(120, 40, "Assinatura / Carimbo", 0, 1, 'C');
        } else {
            $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
        };
    }

}
