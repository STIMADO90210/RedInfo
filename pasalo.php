<?php //
include_once 'config.php';
$r=array();
//reg_mot_vis
                  $sql="SELECT * FROM  reguser_vieja";
                  $res=  mysqli_query(Conectar::con(), $sql);

                  while($reg= mysqli_fetch_assoc($res))
          				{
                                        $r[]=$reg;
          				}
//          					
//          

                               
                                 for($i=1;$i<count($r);$i++){ 
                                   
                                    $iduser     =   $r[$i]['id_user'];                                                                       
                                    $motvisita  = 1;                                                                                                         
//                                    $fecha      =   $r[$i]['fecha_inscrip'];     
                                    $fecha      =   $r[$i]['fecha_inscrip'];                                       
                                   
                                    
                                    
                                    
//                                    $sexo=$r[$i]['sexo_user'];
//                                    $fec_inscrip =   $r[$i]['fecha_inscrip'];
//                                    $tiempo=$r[$i]['tiempo'];
//                                    $con_vis =   $r[$i]['cont_vis'];
//                                    $id_inf=1;
//                                     
                                    
//                                  
//                  $sql="UPDATE reg_visita SET id_mot='$motvisita',fec_vis='$fecha'  WHERE idregvis='$i'";                          
                      
                                     
                  $sql="INSERT INTO reg_visita (id_user,id_mot,fec_vis)"
                          . "VALUE('$iduser','$motvisita',' $fecha')"; 
//                  
                  $res =  mysqli_query(Conectar::con(), $sql);
                  
                 echo "Grabado registro # ".$i.' '.var_dump($res).'<br>';
                                 
                  
                                 }
                  
                  
           