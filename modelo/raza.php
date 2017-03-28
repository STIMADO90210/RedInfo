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
    
    
    
       public function leerrazaid($id){
        $sql="SELECT * FROM raza WHERE id_raza='$id'";
        $res=  mysqli_query(Conectar::con(), $sql);

        while($reg= mysqli_fetch_assoc($res))
				{
					$this->raza[]=$reg;
				}
					return $this->raza;
    } //fin de funcion  leerblog 
    
    
    
      public function leerraza2($ini,$most){
        
        $sql="SELECT * FROM raza LIMIT $ini,$most";
        $res=  mysqli_query(Conectar::con(), $sql);

        while($reg= mysqli_fetch_assoc($res))
				{
					$this->raza[]=$reg;
				}
					return $this->raza;
    } //fin de funcion  leerblog 
    
    public function addraza($raza){
        
           $sql="INSERT INTO raza (raza) VALUES('$raza')";
           $res=  mysqli_query(Conectar::con(), $sql);           
    }
    // 
     public function editrazaid($raza,$id){

    $sql="UPDATE raza SET raza='$raza'  WHERE id_raza='$id'";
    $res=  mysqli_query(Conectar::con(), $sql); 
   
    } //fin del methodo editinfo_id
    
      public function deleterazaid($id){

    $sql="DELETE  FROM raza  WHERE id_raza='$id'";
    $res=  mysqli_query(Conectar::con(), $sql); 
    
    } //fin del methodo editinfo_id
    
}