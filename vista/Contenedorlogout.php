<?php

        $_SESSION['id_user']='';
         $_SESSION['nombre_user']='';
         $_SESSION['apellido_user']='';
         $_SESSION['email_user']='';
         $_SESSION['nivel_user']='';
         $_SESSION['id_inf']='';
 
 session_destroy();
        
       
?>

                    <script>
                        alert('Session Cerrada Con Exito');
                        window.location='?url=Inicio';
                    </script>

