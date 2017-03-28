<section id="ext_menu-1">
   
    <nav class="navbar navbar-inverse ">
        <div class="container-fluid ">
            <br>
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainmenu">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <div class="">
                      <a href="index.php" class="img-rounded pull-left"><img id="logo" src="bootstrap/images/<?php echo  $img ?>" width="50" alt="Infocentro"></a>
                        <a class="navbar-brand letraBlanca" id="nombre" href="index.php"> <?php echo  strtoupper($nomb)  ?></a>
                    </div>
            </div>   
            
             
                    <div class="collapse navbar-collapse col-lg-1" id="mainmenu" >
                          <ul class="nav navbar-nav letraBlanca ">

                            <li><a href="?url=Inicio">INICIO</a><li>
                            <li><a href="?url=servicio">SERVICIOS</a><li>
                            <li><a href="?url=blog">BLOG</a><li>
                            
                           
                            <?php if(isset($_SESSION['email_user'])){ ?>
                            <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">VISITAS<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                
                            <?php if($_SESSION['nivel_user']>0 ){ ?>
                                <li><a href="?url=NuevaVisitas">Registrar Nuevo Visitante</a></li>
                            
                            <li><a href="?url=cedvisita">Registrar Visita</a></li>
                            <?php } ?>
                            <li class="divider"></li>
                            <?php if($_SESSION['nivel_user']>0 ){ ?>
                            <li><a href="?url=listarvisita">Reporte General</a></li>
                            <li><a href="?url=reportefecha">Reporte Por Fecha</a></li>
                            <?php }else { ?>
                            <li><a href="?url=listarvisita2">Reporte General Admin</a></li>
                             <?php } ?>
                            </ul>
                            </li>
                            
                            
                             <?php } ?> 
                            
                             <?php if(!isset($_SESSION['email_user'])){ ?>
                             <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">INFOCENTROS<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <?php
                                    $reg=new Infocentro();
                                    $r=$reg->leerInfo();
                                    for($j=0;$j<  count($r);$j++){
                               ?>
                            <li><a href="?url=login&id=<?php echo strtoupper($r[$j]['id_inf'])  ?>"><?php echo strtoupper($r[$j]['nombre_inf'])  ?></a></li>
                              <?php  }     ?>
                            </ul>
                            </li>
                             <?php  }     ?>
                                 <?php if(isset($_SESSION['email_user'])){ ?>
                            
           
<li class="dropdown">
    <a href="" class="dropdown-toggle " data-toggle="dropdown">
       <img class="img-circle pull-right" src="bootstrap/images/<?php echo  $_SESSION['img_user'] ?>" width="30" >
    </a>
     <br>
      <br>
      <br>
                            <ul class="dropdown-menu">
                               <li class="dropdown-item"><a href="admin/index.php?url2=home">Administracion</a></li> 
                                <li class="dropdown-item"><a href="?url=logout">Cerrar Session</a></li>                                                          
                            </ul>
</li>
                                                                 
                            
                             <?php } ?>
                        
                          </ul>
                        
                        
                       
                        
                        
                        
                        
                        
                    </div>     
            
             <?php if(isset($_SESSION['email_user'])and $_SESSION['nivel_user']>0){ ?>                                                                  
                      <form class="navbar-form navbar-left" role="search" name="cedula" method="post" action="?url=listarvisita" >
                      
                                <div class="form-group">
                                    <input id="BusCed" name="BusCed" class="form-control"  placeholder="Buscar Cedula">
                                    
                                </div>
                                <button type="submit" class="btn btn-success btn-group-sm">Buscar</button>
                      </form>
                   
                     <?php  }     ?>
            
            
                       
            
            
   

            
        </div>
        
    </nav>
</section>
