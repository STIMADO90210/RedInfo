<?php

class Cargo{
     private $Cargo;
     
     
     
                 public function __construct() {
                        $this->Cargo =  array();
                }
                
                
                public function leerCargo(){
                $sql="SELECT * FROM nivel";
                $res=  mysqli_query(Conectar::con(), $sql);

                while($reg= mysqli_fetch_assoc($res))
                                        {
                                                $this->Cargo[]=$reg;
                                        }
                                                return $this->Cargo;
            } // fin de funcion Users
                
                
}

?>
