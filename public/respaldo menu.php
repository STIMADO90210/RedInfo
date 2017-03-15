 <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="index.php" class="navbar-logo"><img id="logo" src="assets/images/<?php echo  $img  ?>" alt="Infocentro"></a>
                        <a class="navbar-caption text-white" id="nombre" href=""><?php echo strtoupper($nomb)  ?></a>
                    </div>

                </div>
                <div class="mbr-table-cell">
                 
                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                        <li class="nav-item"><a class="nav-link link text-white" href="?url=Inicio">INICIO</a></li>
                        <li class="nav-item"><a class="nav-link link text-white" href="?url=servicio">  </a></li>

                        <li class="nav-item"><a class="nav-link link text-white" href="?url=blog">BLOG</a></li>
                        <?php if(!isset($_SESSION['email_user'])){ ?>
                        <li class="nav-item dropdown">

                            <a class="nav-link link dropdown-toggle text-white" data-toggle="dropdown-submenu" href="">INFOCENTROS</a>
                            <div class="dropdown-menu fondoGris">
                               <?php
                                    $reg=new Infocentro();
                                    $r=$reg->leerInfo();
                                    for($j=0;$j<  count($r);$j++){
                               ?>
                                <a class="dropdown-item text-white" href="?url=login&id=<?php echo strtoupper($r[$j]['id_inf'])  ?>"> <?php echo strtoupper($r[$j]['nombre_inf'])  ?> </a>                                                              
                               <?php  }     ?>
                            </div>
                        </li>
                        <?php } ?>
                         <?php if(isset($_SESSION['email_user'])){ ?>
                          <li class="nav-item dropdown">
                            <a class="nav-link link dropdown-toggle text-white" data-toggle="dropdown-submenu" href="">VISITAS</a>
                            <div class="dropdown-menu fondoGris">
                                <a class="dropdown-item text-white" href="?url=NuevaVisitas">Registrar Nuevo Visitante</a>
                                <a class="dropdown-item text-white" href="?url=cedvisita">Registrar Visita</a>
                                <a class="dropdown-item text-white" href="?url=listarvisita">Reporte General</a>

                            </div>
                        </li>
                         <li class="nav-item dropdown">
                            <a class="nav-link link dropdown-toggle text-white" data-toggle="dropdown-submenu" href="">LOGOUT</a>
                            <div class="dropdown-menu fondoGris">
                                <a class="dropdown-item text-white" href="?url=logout">Cerrar Session</a>

                            </div>
                        </li>


                          <li class="nav-item dropdown">
                               <a class="nav-link link dropdown-toggle text-white" data-toggle="dropdown-submenu" href="">
                              <strong class="text-white text-lg-center"><?php echo  $_SESSION['nombre_user'].' '.$_SESSION['apellido_user']."<br>" ?></strong>
                         <img class="img-rounded col-lg-offset-2" src="assets/images/<?php echo  $_SESSION['img_user'] ?>" width="40">
                         <?php  echo '<br><small class="text-white text-lg-center">ADMINISTRADOR</small>' ?></a>
                         <div class="dropdown-menu fondoGris">
                                <a class="dropdown-item text-white" href="admin/index.php?url2=home">Administrar</a>

                            </div>

                        </li>
                        <?php } ?>
                    </ul>
                </div>
                   <?php if(isset($_SESSION['email_user'])and isset($_SESSION['nivel_user'])==1){ ?>
                    
                        <br>
                      
                      <form class="form-inline " name="cedula" method="post" action="?url=listarvisita" >
                      
                                <div class="form-group">
                                    <input id="BusCed" name="BusCed" class="form-control"  placeholder="Buscar Cedula">
                                    
                                </div>
                                <button type="submit" class="btn btn-success btn-group-sm">Buscar</button>
                      </form>
                   
                     <?php  }     ?>
            </div>