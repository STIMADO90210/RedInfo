<?php


class Raza{
    
    private $raza;


    public function __construct() {
        $this->raza=array();
    }
    
    
    
    public function leerraza(){
        $sql="SELECT * FROM raza";
        $res=  mysqli_query(Conectar::con(), $sql);

        while($reg= mysqli_fetch_assoc($res))
				{
					$this->raza[]=$reg;
				}
					return $this->raza;
    } //fin de funcion  leerblog
}

