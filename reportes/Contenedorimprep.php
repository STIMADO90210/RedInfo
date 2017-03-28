
<?php


include '../bootstrap/fpdf/fpdf.php';
include '../modelo/conectar.php';
include '../modelo/visitas.php';
$pdf= new FPDF();
$pdf->AddPage();

$pdf->Image('../bootstrap/images/iconoinfo.png',10,8,15,13,'png');
$pdf->SetFont('Arial','b',20);
$pdf->Cell(15,8,'',0);
$pdf->Cell(18,8,'InfoCentro',0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(110,10,'',0);
$pdf->Cell(12,10,'Fecha : '.date('d/m/Y'),0);
$pdf->Ln(15);
$pdf->SetFont('Arial','B',20);
$pdf->Cell(60,20,'',0);
$pdf->Cell(18,20,'Reporte de Visitantes',0);
$pdf->Ln(28);
$pdf->SetFont('Arial','B',7);
$pdf->Write('', 'Volver a Reportes  Generales', '../index.php?url=listarvisita');
        //('<h1>Reporte de Visitantes</h1>');
$pdf->Ln(15);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(18,12,'ID',0);
$pdf->Cell(60,12,'Nombre',0);
$pdf->Cell(28,12,'Cedula',0);
$pdf->Cell(58,12,'Email',0);
$pdf->Cell(18,12,'Edad',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','',10);
$reg=new Visitas();
$r=$reg->leervisita();
for($i=0;$i<count($r);$i++){
$pdf->Cell(18,12,$r[$i]['id_user'],0);
$pdf->Cell(60,12,  strtoupper($r[$i]['nombre_user']),0);
$pdf->Cell(28,12,$r[$i]['cedula_user'],0);
$pdf->Cell(58,12,strtoupper($r[$i]['email_user']),0);
$edad=date('Y-m-d')-$r[$i]['fecha_nac'];
$pdf->Cell(38,12,$edad,0);
$pdf->Ln(10);
}



$pdf->Output();

?>

