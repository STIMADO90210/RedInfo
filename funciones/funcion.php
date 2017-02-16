<?php

function buscarmotivo($id){
   $sql="SELECT * FROM motvisita WHERE id_mot='$id'";
     $res=  mysqli_query(Conectar::con(), $sql);
       
     $reg= mysqli_fetch_assoc($res);
    return $reg['MotVisita'];
}

function contdias($fecha){
    
                     $fv=  explode('-', $fecha);
                   
                     $fechaHoy=date('d-m-Y');
                    $fh=  explode('-', $fechaHoy);
                                    $fec1=strtotime($fecha);                                   
                                    $fec2=strtotime($fechaHoy);
                                   $dif=$fec1-$fec2;
                                    $cant=abs($dif/(24*60*60));
                                    return $cant; 
                                    
}


