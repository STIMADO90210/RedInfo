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
    
    
    
       public function leerdiscapid($id){
        $sql="SELECT * FROM discapa WHERE id_discap='$id'";
        $res=  mysqli_query(Conectar::con(), $sql);

        while($reg= mysqli_fetch_assoc($res))
				{
					$this->discap[]=$reg;
				}
					return $this->discap;
    } //fin de funcion  leerblog 
    
    
    
      public function leerdiscap2($ini,$most){
        $sql="SELECT * FROM discapa LIMIT $ini,$most";
        $res=  mysqli_query(Conectar::con(), $sql);

        while($reg= mysqli_fetch_assoc($res))
				{
					$this->discap[]=$reg;
				}
					return $this->discap;
    } //fin de funcion  leerblog 
    
    public function adddiscap($dis){
        
           $sql="INSERT INTO discapa (discap) VALUES('$dis')";
           $res=  mysqli_query(Conectar::con(), $sql);           
    }
    // 
     public function editdiscapid($dis,$id){

    $sql="UPDATE discapa SET discap='$dis'  WHERE id_discap='$id'";
    $res=  mysqli_query(Conectar::con(), $sql); 
   
    } //fin del methodo editinfo_id
    
      public function deletediscapid($id){

    $sql="DELETE  FROM discapa  WHERE id_discap='$id'";
    $res=  mysqli_query(Conectar::con(), $sql); 
    
    } //fin del methodo editinfo_id
    
}