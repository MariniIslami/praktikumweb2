<?php
$pdf = new FPDF('p', 'mm', 'A4');
$pdf->Addpage();
include 'report_header.php';
$pdf->SetFont('Times', 'B', 18);
$pdf->SetFont('Times', 'B', 14);
$pdf->Cell(0, 5, 'LAPORAN DATA SATUAN', 0, 1, 'C');
$pdf->Cell(30, 8, '', 0, 1);
$pdf->SetFont('Times', 'B', 9);
$pdf->Cell(20, 6, 'NO', 1, 0, 'C');
$pdf->Cell(80, 6, 'NAMA SATUAN', 1, 0, 'C');
$i = 1;
$data = $this->db->get('satuan')->result_array();
foreach ($data as $d) {
    $pdf->SetFont('Times', '', 9);
    $pdf->Cell(20, 6, $i++, 1, 0);
    $pdf->Cell(80, 6, $d['name'], 1, 0);
}
$pdf->SetFont('Times', '', 10);
$pdf->Output('laporan_satuan.pdf', 'I');