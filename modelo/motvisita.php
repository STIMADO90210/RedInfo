<?php

class MotVisita{
    
    private $motivo;


    public function __construct() {
        $this->motivo=array();
    }
    
    
    
    public function leermotivo(){
        $sql="SELECT * FROM motvisita";
        $res=  mysqli_query(Conectar::con(), $sql);

        while($reg= mysqli_fetch_assoc($res))
				{
					$this->motivo[]=$reg;
				}
					return $this->motivo;
    } //fin de funcion  leerblog
    
    
    public function listamotivoid($id){
        $sql="SELECT * FROM reg_visita WHERE id_user='$id' ORDER BY fec_vis ASC";
        $res=  mysqli_query(Conectar::con(), $sql);
       
        while($reg= mysqli_fetch_assoc($res))
				{
           
					$this->motivo[]=$reg;
				}
					return $this->motivo;
    } //fin de funcion  leerblog
    
    
    public function leermot(){
        $sql="SELECT * FROM reg_visita";
        $res=  mysqli_query(Conectar::con(), $sql);
       
        while($reg= mysqli_fetch_assoc($res))
				{
           
					$this->motivo[]=$reg;
				}
					return $this->motivo;
    } //fin de funcion  leerblog
    
    
    
     public function regmotivo($nro_user,$motvisita,$fecha){
          $sql="INSERT INTO reg_visita (id_user,id_mot,fec_vis) VALUE('$nro_user','$motvisita','$fecha')";
          $res=  mysqli_query(Conectar::con(), $sql);
          
     }
     
     
     
}
