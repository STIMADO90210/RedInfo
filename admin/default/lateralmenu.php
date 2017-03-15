 <aside class="col-lg-3 ">

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
                    <a href="?url2=discap">DISCAPACIDAD</a>
                </li>
                <?php if($_SESSION['nivel_user']!=0){ ?>
                <li>
                    <a href="?url2=visita">VISITAS</a>
                </li>
                <?php } ?>
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
