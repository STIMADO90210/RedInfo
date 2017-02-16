<?php


class Mision{
    
    private $mision;


    public function __construct() {
        $this->mision=array();
    }
    
    
    
    public function leermision(){
        $sql="SELECT * FROM mision";
        $res=  mysqli_query(Conectar::con(), $sql);

        while($reg= mysqli_fetch_assoc($res))
				{
					$this->mision[]=$reg;
				}
					return $this->mision;
    } //fin de funcion  leerblog
}
