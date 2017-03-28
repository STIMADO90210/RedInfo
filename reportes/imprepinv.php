<?php
   
    include '../config.php';
  
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


    $iduser=$_GET['dat'];
    $reg=new Visitas();
    $r=$reg->leervisitaid($iduser);
        $pdf->Cell(18,20,'Visitante : '.  strtoupper($r[0]['nombre_user']),0);
        $pdf->Ln(10);
        $pdf->Cell(18,20,'Cedula : '.  strtoupper($r[0]['cedula_user']),0);
        $pdf->Ln(28);
        $pdf->SetFont('Arial','B',7);
        $pdf->Write('', 'Volver a Reportes  Generales', '../index.php?url=listarvisita');
        //('<h1>Reporte de Visitantes</h1>');
    $pdf->Ln(15);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(70,12,'Dia',0);
    $pdf->Cell(50,12,'Fecha',0);
    $pdf->Cell(50,12,'Motivo De Visita',0);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','',10);
 $regi=new MotVisita();
 $reg=$regi->listamotivoid($r[0]['id_user']);
                                    
for($i=0;$i<count($reg);$i++){
                                    $fecha= implode("-", array_reverse(explode("-", $reg[$i]['fec_vis'])));                                                                                                         
                                    $fec=strtotime($r[$i]['fec_vis']);
                                    $nrodia=date('w', $fec);
$pdf->Cell(70,12,$dias[$nrodia],0);
$pdf->Cell(50,12,  strtoupper($fecha),0);

$pdf->Cell(50,12,strtoupper(buscarmotivo($reg[$i]['id_mot'])),0);

$pdf->Ln(10);
}



$pdf->Output();

?>

