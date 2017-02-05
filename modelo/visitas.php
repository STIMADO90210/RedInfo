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



   
}  // fin de clase  visistas
