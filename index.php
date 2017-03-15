<?php
    include_once 'config.php';
    include_once 'public/cabecera.php';   
    
        if(isset($_SESSION['logo_inf'])){ 
            
            $img=$_SESSION['logo_inf'];
            $nomb=$_SESSION['nombre_inf'];
            
        }else{
            
            $img="iconoinfo.png";
             $nomb='INFOCENTRO';
            
        }                                    
       include_once 'public/mainmenu.php';                  
    ?>

                <script>
                     var img = "<?php echo  $img  ?>"; 
                     var nomb = "<?php echo strtoupper($nomb)  ?>";
                     
                </script>
                
<body style="background-image:url(bootstrap/images/fondo-gris.jpg)">
        
           <?php 
           
           if(isset($_GET['url'])){
            
                    $url=$_GET['url'];
           }else{
               $url='Inicio';
           }
           ?>
    
    
    
   <?php
   
   include_once 'vista/Contenedor'.$url.'.php'; 
   ?>
    <br>
    <br>
            <?php include_once 'public/rodapie.php'; ?>

           <?php include_once 'public/stilosJs.php'; ?>
    
   
</body>        
</html>
