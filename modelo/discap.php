<?php


class Discap{
    
    private $discap;


    public function __construct() {
        $this->discap=array();
    }
    
    
    
    public function leerdiscap(){
        $sql="SELECT * FROM discapa";
        $res=  mysqli_query(Conectar::con(), $sql);

        while($reg= mysqli_fetch_assoc($res))
				{
					$this->discap[]=$reg;
				}
					return $this->discap;
    } //fin de funcion  leerblog
}