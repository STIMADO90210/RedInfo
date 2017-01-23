<?php 

class Conectar
{
    
			public static function con()
			{                            								
				// la conexion a la base de datos db_diario
				
				$conexion=  mysqli_connect('localhost', 'root', '', 'db_blog');
				
				return $conexion;
				}
				
				
}//fin de clase conectar
?>

