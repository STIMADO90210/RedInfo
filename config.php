<?php 

                                // activa la fecha zona horaria de caracas
				date_default_timezone_set('America/caracas');
				// verifica si no hay session abierta y la activa inmediatamente
				if(!session_start())
				{
					session_start();
				}



                require_once 'modelo/infocentros.php';
                require_once("modelo/conectar.php");
                require_once("modelo/blog.php");
                require_once("modelo/users.php");
                require_once("modelo/cargo.php");


                define('DS', DIRECTORY_SEPARATOR);
                define('ROOT', realpath(dirname(__FILE__)).DS);


?>
