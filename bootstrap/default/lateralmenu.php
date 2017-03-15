 <aside class="col-lg-3 ">
<!--                <div class="jumbotron">
            <h3 class=" text-danger text-center">Menu</h3>

                <a href="?url2=infocentro" class="btn btn-block btn-primary">INFOCENTRO</a>
                
                     <a href="?url2=users" class="btn btn-block btn-info">USUARIOS</a>
               
                <a href="?url2=blogs" class="btn btn-block btn-danger">BLOGS</a>
                <a href="?url2=visita" class="btn btn-block btn-info">VISITAS</a>
                <a href="?url2=home" class="btn btn-block btn-default">REPORTES</a>
                <a href="?url2=home" class="btn btn-block btn-success">SLIDER</a>

                </ul>
                <br>
                <br>
          </div>-->

<!-- Sidebar -->
<div id="sidebar-wrapper" class="col-lg-3">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a>
                       Menu Administrativo
                    </a>
                </li>
                <li>
                    <a href="?url2=infocentro">INFOCENTRO</a>
                </li>
                <?php if($_SESSION['nivel_user']==0){ ?>
                <li>
                    <a href="?url2=users">USUARIOS</a>
                </li>
                 <?php } ?>
                <li>
                    <a href="?url2=blogs">BLOGS</a>
                </li>
                <li>
                    <a href="?url2=visita">VISITAS</a>
                </li>
                <li>
                    <a href="?url2=home">REPORTES</a>
                </li>
                <li>
                    <a href="#">SLIDER</a>
                </li>
                 <li>
                    <a href="../?url=Inicio">SALIR AL HOME</a>
                </li>
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->



        </aside>
