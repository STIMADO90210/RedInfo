<?php

class Comentario{

    private $Comentario;

    public function __construct() {
        $this->Comentario=  array();
    }

    public function leerComentario(){
        $sql="SELECT * FROM Comenta";
        $res=  mysqli_query(Conectar::con(), $sql);

        while($reg= mysqli_fetch_assoc($res))
				{
					$this->Comentario[]=$reg;
				}
					return $this->Comentario;
    } //fin de funcion  leerblog

        public function leerComentario2($id_art){
        $sql="SELECT * FROM Comenta WHERE id_art='$id_art' ORDER BY id_come DESC";
        $res=  mysqli_query(Conectar::con(), $sql);

        while($reg= mysqli_fetch_assoc($res))
        {
          $this->Comentario[]=$reg;
        }
          return $this->Comentario;
    } //fin de funcion  leerblog


    


    


      public function addComentario($fecha,$hora,$nick, $Comentario, $id_art){
        $sql="INSERT INTO comenta (fecha,hora,nick,Comentario,id_art) VALUES('$fecha','$hora','$nick','$Comentario','$id_art')";
     
        $res=  mysqli_query(Conectar::con(), $sql);
      
      } // fin de funcion addblog


    


}


?>
