 <aside class="col-lg-3 ">
                <div class="jumbotron">
            <h3 class=" text-danger text-center">Menu</h3>

                <a href="?url2=infocentro" class="btn btn-block btn-primary">INFOCENTRO</a>
                <?php if($_SESSION['nivel_user']==0){ ?>
                     <a href="?url2=users" class="btn btn-block btn-info">USUARIOS</a>
                <?php } ?>
                <a href="?url2=blogs" class="btn btn-block btn-danger">BLOGS</a>
                <a href="?url2=home" class="btn btn-block btn-default">REPORTES</a>
                <a href="?url2=home" class="btn btn-block btn-success">SLIDER</a>

                </ul>
                <br>
                <br>
          </div>
        </aside>
