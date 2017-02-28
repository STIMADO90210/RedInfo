<?php
  Class Visitas{

       private $visita;

               public function __construct() 
               {
                $this->visita=  array();
              }

              public function leervisita(){
                  $sql="SELECT * FROM reg_user";
                  $res=  mysqli_query(Conectar::con(), $sql);

                  while($reg= mysqli_fetch_assoc($res))
          				{
          					$this->visita[]=$reg;
          				}
          					return $this->visita;
              } //fin de funcion  leerblog
              
                public function leervisitaid($id){
                  $sql="SELECT * FROM reg_user WHERE id_user='$id'" ;
                  $res=  mysqli_query(Conectar::con(), $sql);

                  while($reg= mysqli_fetch_assoc($res))
          				{
          					$this->visita[]=$reg;
          				}
          					return $this->visita;
              } //fin de funcion  leerblog
                                                                                  
              
                public function buscarCed($ced){
                     $idinfo=$_SESSION['id_inf'];
                  $sql="SELECT * FROM reg_user WHERE id_info='$idinfo' AND cedula_user='$ced'";
                  $res=  mysqli_query(Conectar::con(), $sql);

                  while($reg= mysqli_fetch_assoc($res))
          				{
          					$this->visita[]=$reg;
          				}
          					return $this->visita;
              } //fin de funcion  leerblog
                                                                                  
              
              
              
              public function leervisita2(){
                  $idinfo=$_SESSION['id_inf'];
                  
                  $sql="SELECT * FROM reg_user WHERE id_info='$idinfo'  ORDER BY id_user DESC";
                  $res=  mysqli_query(Conectar::con(), $sql);

                  while($reg= mysqli_fetch_assoc($res))
          				{
          					$this->visita[]=$reg;
          				}
          					return $this->visita;
              } //fin de funcion  leerblog
              
                  public function leervisitaestaditica(){
                  $idinfo=$_SESSION['id_inf'];
                  
                  $sql="SELECT * FROM reg_user  ORDER BY id_user DESC";
                  $res=  mysqli_query(Conectar::con(), $sql);

                  while($reg= mysqli_fetch_assoc($res))
          				{
          					$this->visita[]=$reg;
          				}
          					return $this->visita;
              } //fin de funcion  leerblog


               public function contvisita(){
                  $sql="SELECT COUNT(*) FROM reg_user";
                  $res=  mysqli_query(Conectar::con(), $sql);

                  while($reg= mysqli_fetch_assoc($res))
                  {
                    $this->visita[]=$reg;
                  }
                    return $this->visita;
              } //fin de funcion  leerblog


              public function contnuevos(){
                  $sql="SELECT COUNT(*) FROM reg_user where fecha_inscrip < 12-12-2017";
                  $res=  mysqli_query(Conectar::con(), $sql);

                  while($reg= mysqli_fetch_assoc($res))
                  {
                    $this->visita[]=$reg;
                  }
                    return $this->visita;
              } //fin de funcion  leerblog


              public function leervisitapag($ini,$most){
                  $sql="SELECT * FROM reg_user LIMIT $ini,$most";
                  $res=  mysqli_query(Conectar::con(), $sql);

                  while($reg= mysqli_fetch_assoc($res))
                  {
                    $this->visita[]=$reg;
                  }
                    return $this->visita;
              } //fin de funcion  leerblogpag



              public function reg_visitas($cedula,$nombre,$email,$telf,$fec_nac,$sexo,$fec_inscrip,$tiempo,$con_vis,$id_inf){
                  
                  $sql="INSERT INTO reg_user (nombre_user,  cedula_user,email_user, telefono_user,   fecha_nac,   sexo_user,   fecha_inscrip ,  tiempo , cont_vis , id_info)"
                          . "VALUE('$nombre','$cedula','$email','$telf','$fec_nac','$sexo','$fec_inscrip','$tiempo','$con_vis','$id_inf')";
                  $res=  mysqli_query(Conectar::con(), $sql);
                  
                  
              } //fin de funcion  leerblogpag
              
                 public function act_visita($convis,$idvis){
                  
                  $sql="UPDATE reg_user SET cont_vis='$convis'  WHERE id_user='$idvis'";                          
                  $res= mysqli_query(Conectar::con(), $sql);
                 
                  
              } //fin de funcion  leerblogpag
              
     public function editvisitaid($cedula,$nombre,$telefono,$email, $fecha_nac,$sexo,$id){
         $sql="UPDATE reg_user SET nombre_user='$nombre',cedula_user='$cedula',email_user='$email',telefono_user='$telefono',fecha_nac='$fecha_nac',sexo_user='$sexo'  WHERE id_user='$id'"; 
         $res= mysqli_query(Conectar::con(), $sql);
         
     }         


   
}  // fin de clase  visistas
