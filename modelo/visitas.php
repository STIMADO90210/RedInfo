<?php>
  Class Visitas{

       private $visita;

               public function __construct() 
               {
                $this->visita=  array();
              }

              public function leervisita(){
                  $sql="SELECT * FROM blog_info";
                  $res=  mysqli_query(Conectar::con(), $sql);

                  while($reg= mysqli_fetch_assoc($res))
          				{
          					$this->visita[]=$reg;
          				}
          					return $this->visita;
              } //fin de funcion  leerblog


   
}  // fin de clase  visistas
