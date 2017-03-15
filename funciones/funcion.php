<?php

function buscarmotivo($id){
   $sql="SELECT * FROM motvisita WHERE id_mot='$id'";
     $res=  mysqli_query(Conectar::con(), $sql);
       
     $reg= mysqli_fetch_assoc($res);
    return $reg['MotVisita'];
}

function cont_visitas($id){
    
    $sql="SELECT * FROM reg_user WHERE id_info='$id'";
     $res=  mysqli_query(Conectar::con(), $sql);
     
                $contador=0;
                 while($reg= mysqli_fetch_assoc($res))
                  {
                     $cont_id=0;
                     $iduser= $reg['id_user'];
                   $sql="SELECT * FROM reg_visita WHERE id_user='$iduser'";
                    $res2=  mysqli_query(Conectar::con(), $sql);
                    
                   
                                    
                  
                    
                  }
                    
                  
                  return $this->visita;
    
}


function status($id){
   $sql="SELECT * FROM reg_user WHERE id_user='$id'";
     $res=  mysqli_query(Conectar::con(), $sql);
       
     $reg= mysqli_fetch_assoc($res);
    return $reg['cont_vis'];
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


