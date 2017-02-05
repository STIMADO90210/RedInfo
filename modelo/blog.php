<?php

class Blog{

    private $blog;

    public function __construct() {
        $this->blog=  array();
    }

    public function leerblog(){
        $sql="SELECT * FROM blog_info";
        $res=  mysqli_query(Conectar::con(), $sql);

        while($reg= mysqli_fetch_assoc($res))
				{
					$this->blog[]=$reg;
				}
					return $this->blog;
    } //fin de funcion  leerblog

        public function leerblog2(){
        $sql="SELECT * FROM blog_info ORDER BY id_art DESC";
        $res=  mysqli_query(Conectar::con(), $sql);

        while($reg= mysqli_fetch_assoc($res))
        {
          $this->blog[]=$reg;
        }
          return $this->blog;
    } //fin de funcion  leerblog


    public function leerblogpag($ini,$most){
      $sql="SELECT * FROM blog_info LIMIT $ini,$most";
      $res=  mysqli_query(Conectar::con(), $sql);

                      while($reg= mysqli_fetch_assoc($res))
                      {
                                      $this->blog[]=$reg;
                      }
                                      return $this->blog;
  } // fin del metodo leerinfopag



    public function editblogid($fecha, $titulo,$contenido, $logoblog,$id){

    $sql="UPDATE blog_info SET fecha_art='$fecha', titulo_art='$titulo', cont_art='$contenido', img_art='$logoblog'  WHERE id_art='$id'";

    $res=  mysqli_query(Conectar::con(), $sql);
    } //fin del methodo editinfo_id


    public function deleteblogid($id){

    $sql="DELETE  FROM blog_info   WHERE id_art='$id'";
    $res=  mysqli_query(Conectar::con(), $sql);
    } //fin del methodo editinfo_id



      public function addblog($fec, $titu, $cont, $logo){
        $sql="INSERT INTO blog_info (fecha_art,titulo_art,cont_art,img_art) VALUES('$fec', '$titu', '$cont', '$logo')";
        $res=  mysqli_query(Conectar::con(), $sql);

      } // fin de funcion addblog


     public function leerblogid($id){
        $sql="SELECT * FROM blog_info WHERE id_art='$id'";
        $res=  mysqli_query(Conectar::con(), $sql);

        while($reg= mysqli_fetch_assoc($res))
				{
					$this->blog[]=$reg;
				}
					return $this->blog;
    } // fin de funcion leerblogid


}


?>
