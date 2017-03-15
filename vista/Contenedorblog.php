  <section>
        <div class="container text-uppercase"  style='background-image:url(bootstrap/images/fondo-azul-claro.jpg)'>
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <br>

                    <h1 class="text-center letraBlanca">Blog Del Infocentro</h1>
                    <br>
                    <div class="container">

                       <?php
                            $reg=new Blog();
                            $r=$reg->leerblog();
                            $cont=0;
                       for($j=0;$j<count($r);$j++){
                            $cont++;
                       ?>
                        <div class="col-lg-4 ">
                            <div class="container-fluid"  style='background-image:url(bootstrap/images/93b6a4a67850083ea24d8a9fd1039ab9.jpg)'>
                                <br>
                              <br>
                             <h3 class="letraBlanca text-center text-uppercase"><?php echo $r[$j]['titulo_art'] ?></h3>
                             <img class="img-thumbnail" src="bootstrap/images/<?php echo $r[$j]['img_art'] ?>" >
                              <br>
                              <br>
                              <br>

                              <a href="?url=blogdet&id=<?php echo $r[$j]['id_art'] ?>" class="btn btn-info"> Leer Mas... </a>
                              <br>
                              <br>

                             </div>
                           <br>
                        </div>
                       <?php
                       if($cont==3){
                           ?>
                        <div class="clearfix"></div>
                            <?php
                           $cont=0;
                       }
                       }
                       ?>

                    </div>

                    <br>
                    <br>
                </div>




            </div>

        </div>

    </section>
