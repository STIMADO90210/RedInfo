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
        $sql="SELECT * FROM reg_visita WHERE id_user='$id'";
        $res=  mysqli_query(Conectar::con(), $sql);
       
        while($reg= mysqli_fetch_assoc($res))
				{
           
					$this->motivo[]=$reg;
				}
					return $this->motivo;
    } //fin de funcion  leerblog
    
     public function leermotivoid($id){
        
        $sql="SELECT * FROM motvisita WHERE id_mot='$id'";
        $res=  mysqli_query(Conectar::con(), $sql);
       
        while($reg= mysqli_fetch_assoc($res))
				{
            
					$this->motivo[]=$reg;
				}
					return $this->motivo;
    } //fin de funcion  leerblog
    
     public function leermotivo2($ini,$most){
        
        $sql="SELECT * FROM motvisita LIMIT $ini,$most";
        $res=  mysqli_query(Conectar::con(), $sql);

        while($reg= mysqli_fetch_assoc($res))
				{
					$this->motivo[]=$reg;
				}
					return $this->motivo;
    } //fin de funcion  leerblog
    
    
    public function totalvisitas($id_inf){
        $sql="SELECT * FROM reg_visita WHERE id_info='$id_inf'";
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
     
      public function addmotivo($motivo){
        
           $sql="INSERT INTO motvisita (MotVisita) VALUES('$motivo')";
           $res=  mysqli_query(Conectar::con(), $sql);           
    }
    // 
     public function editmotivoid($motivo,$id){

    $sql="UPDATE motvisita SET MotVisita='$motivo'  WHERE id_mot='$id'";
    $res=  mysqli_query(Conectar::con(), $sql); 
   
    } //fin del methodo editinfo_id
    
      public function deletemotivoid($id){
          
    $sql="DELETE  FROM motvisita  WHERE id_mot='$id'";
    $res=  mysqli_query(Conectar::con(), $sql); 
    
    } //fin del methodo editinfo_id
     
}
