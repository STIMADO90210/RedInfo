<?php

   class Infocentro{

                private $info;

                public function __construct() {
                    $this->info=  array();
                }

                        public function leerInfo(){
                            $sql="SELECT * FROM infocentro";
                            $res=  mysqli_query(Conectar::con(), $sql);

                                            while($reg= mysqli_fetch_assoc($res))
                                            {
                                                            $this->info[]=$reg;
                                            }
                                                            return $this->info;
                        } // fin del metodo leerinfo



                    public function leerInfopag($ini,$most){
                      $sql="SELECT * FROM infocentro LIMIT $ini,$most";
                      $res=  mysqli_query(Conectar::con(), $sql);

                                      while($reg= mysqli_fetch_assoc($res))
                                      {
                                                      $this->info[]=$reg;
                                      }
                                                      return $this->info;
                  } // fin del metodo leerinfopag

                    public function leerInfo_id($id){
                      $sql="SELECT * FROM infocentro WHERE id_inf='$id'";
                      $res=  mysqli_query(Conectar::con(), $sql);

                      while($reg= mysqli_fetch_assoc($res))
                                              {
                                                      $this->info[]=$reg;
                                              }
                                                      return $this->info;
                      } //fin del methodo leerinfo_id


                      public function editInfo_id($codinf, $nombinf,$dirinf,$telfinf,$logoinf,$id){
                      $sql="UPDATE infocentro SET cod_inf='$codinf', nombre_inf='$nombinf', direccion_inf='$dirinf', telf_inf='$telfinf' , logo_inf='$logoinf'  WHERE id_inf='$id'";

                      $res=  mysqli_query(Conectar::con(), $sql);

//                      while($reg= mysqli_fetch_assoc($res))
//                                              {
//                                                      $this->info[]=$reg;
//                                              }
//                                                      return $this->info;
                      } //fin del methodo editinfo_id


                      public function deleteInfo_id($id){

                      $sql="DELETE  FROM infocentro   WHERE id_inf='$id'";
                      $res=  mysqli_query(Conectar::con(), $sql);

//                      while($reg= mysqli_fetch_assoc($res))
//                                              {
//                                                      $this->info[]=$reg;
//                                              }
//                                                      return $this->info;
                      } //fin del methodo editinfo_id



                public function addinfo($cod,$nomb,$dir,$telf,$logo){

                 $sql="INSERT INTO infocentro (cod_inf,  nombre_inf, direccion_inf, telf_inf, logo_inf)"
                ."value('$cod','$nomb', '$dir', '$telf', '$logo')";
                    $res=  mysqli_query(Conectar::con(), $sql);

                } // fin del metodo addinfo






} //fin de la clase infocentrep
?>
