<section id="ext_menu-1 ">

    <nav class="navbar navbar-dropdown navbar-inverse navbar-fixed-top fondoGris">
        <div class="container ">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="index.php" class="navbar-logo"><img id="logo" src="assets/images/iconoinfo.png" alt="Infocentro"></a>
                        <a class="navbar-caption text-white" id="nombre" href="">INFOCENTRO</a>
                    </div>

                </div>
                <div class="mbr-table-cell">
                    <?php if(isset($_SESSION['email_user'])and isset($_SESSION['nivel_user'])==1){ ?>
                    <div class="col-lg-4">
                        <br>
                        <br>
                            <form class="form-group" name="cedula" method="post" action="" >
                                <div class="form-group">
                                    <input id="BusCed" class="form-control"  placeholder="Buscar Cedula" >
                                </div>
                            </form>
                    </div>
                     <?php  }     ?>
                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                        <li class="nav-item"><a class="nav-link link text-white" href="?url=inicio">INICIO</a></li>
                        <li class="nav-item"><a class="nav-link link text-white" href="?url=servicio">SERVICIOS</a></li>
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
            </div>
        </div>
    </nav>

</section>
