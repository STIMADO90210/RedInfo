<?php

class Conectar
{

			public static function con()
			{
				// la conexion a la base de datos db_diario

				$conexion=  mysqli_connect('localhost', 'root', '', 'info_blog');
				//1234   info_blog
				return $conexion;
				}


}//fin de clase conectar
?>
