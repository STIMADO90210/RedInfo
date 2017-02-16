<?php
        class Users{

            private $Users;

            public function __construct() {
                $this->Users=  array();
            }

            public function Users(){
                $sql="SELECT * FROM usuarios";
                $res=  mysqli_query(Conectar::con(), $sql);

                while($reg= mysqli_fetch_assoc($res))
                                        {
                                                $this->Users[]=$reg;
                                        }
                                                return $this->Users;
            } // fin de funcion Users
            
            


            public function leerUsersId($id){
                $sql="SELECT * FROM usuarios WHERE id_user='$id'";
                $res=  mysqli_query(Conectar::con(), $sql);

                while($reg= mysqli_fetch_assoc($res))
                                        {
                                                $this->Users[]=$reg;
                                        }
                                                return $this->Users;
            } // fin de funcion Users

            public function editUserid($cedula, $nombre, $apellido,$email,$pass,$img, $id_inf, $cargo,$id){

              $sql="UPDATE usuarios SET cedula_user='$cedula', nombre_user='$nombre', apellido_user='$apellido',email_user='$email',clave_user='$pass',img_user='$img',id_inf='$id_inf',nivel_user= '$cargo'  WHERE id_user='$id'";
                $res=  mysqli_query(Conectar::con(), $sql);

            } // fin editUserid

            public function deleteUsersId($id){

              $sql="DELETE FROM usuarios  WHERE id_user='$id'";
                $res=  mysqli_query(Conectar::con(), $sql);

            } // fin editUserid



            public function Users_ced($ced){
                $sql="SELECT * FROM usuarios WHERE cedula_user=$ced";
                $res=  mysqli_query(Conectar::con(), $sql);

                while($reg= mysqli_fetch_assoc($res))
                                        {
                                                $this->Users[]=$reg;
                                        }
                                                return $this->Users;
            } // fin de funcion Users



                  public function addusers($cedula, $nombre, $apellido,$email,$pass,$img, $id_inf, $cargo){
                    $sql="INSERT INTO usuarios (cedula_user,nombre_user,apellido_user,email_user,clave_user,img_user,id_inf, nivel_user) VALUES('$cedula', '$nombre', '$apellido','$img','$email','$pass', '$id_inf', '$cargo')";
                    $res=  mysqli_query(Conectar::con(), $sql);
                    
                  } // fin de funcion addblog
                  
                  
                   public function datusers($nro_user,$raza,$discap,$mision){
                    $sql="INSERT INTO dat_user (id_user,id_raza,id_discap,id_mision) VALUES('$nro_user','$raza','$discap','$mision')";
                    $res=  mysqli_query(Conectar::con(), $sql);
                    
                  } // fin de funcion addblog

            public function leerUserspag($ini,$most){
                $sql="SELECT * FROM usuarios LIMIT $ini,$most";
                $res=  mysqli_query(Conectar::con(), $sql);

                while($reg= mysqli_fetch_assoc($res))
                                        {
                                                $this->Users[]=$reg;
                                        }
                                                return $this->Users;
            }


             public function login($email,$pass,$idinf){
                $sql="SELECT * FROM usuarios WHERE email_user='$email' AND clave_user='$pass' AND id_inf='$idinf'";
                $res=  mysqli_query(Conectar::con(), $sql);
                if($res){
                    while($reg= mysqli_fetch_assoc($res))
                    {
                            $this->Users[]=$reg;
                    }

              }
                    return $this->Users;
            } // fin del metodo login


            // metodo para buscar el infocentro donde es administrador el usuario
             public function buscarinfo($idinf){
                $sql="SELECT * FROM usuarios WHERE id_inf='$idinf'";
                $res=  mysqli_query(Conectar::con(), $sql);

                while($reg= mysqli_fetch_assoc($res))
                                        {
                                                $this->Users[]=$reg;
                                        }
                                                return $this->Users;
            } //fin del metodo buscarinfo



        } //fin de la clase users
?>
