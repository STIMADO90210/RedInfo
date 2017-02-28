<?php 
 if(!session_start())
 {
       session_start();
 }
                               

                                // activa la fecha zona horaria de caracas
				date_default_timezone_set('America/caracas');
				// verifica si no hay session abierta y la activa inmediatamente
				
                                    $mes=array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Obtubre','Noviembre','Diciembre');
                                    $dias=array('DOMINGO','LUNES','MARTES','MIERCOLES','JUEVES','VIERNES','SABADO');
                require_once("modelo/conectar.php");                     
                require_once("modelo/visitas.php");
                require_once 'modelo/infocentros.php';               
                require_once("modelo/blog.php");
                require_once("modelo/users.php");
                require_once("modelo/cargo.php");
                require_once("modelo/motvisita.php");
                require_once("modelo/raza.php");
                require_once("modelo/discap.php");
                require_once("modelo/mision.php");
                require_once("modelo/comentario.php");
                require_once('funciones/funcion.php');
                



                define('DS', DIRECTORY_SEPARATOR);
                define('ROOT', realpath(dirname(__FILE__)).DS);

?>
