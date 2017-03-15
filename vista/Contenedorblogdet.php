  <section>
        <div class="container-fluid fondoCeleste">
            <div class="row">
                <div class="col-lg-8">
                    <br>
                    <br>
                      <?php

                      if(isset($_POST['id_art'])){

                      $id=  $_POST['id_art'];
                      $fecha=date('Y-m-d');
                      $hora=date('H:m:s');
                      $nick=$_POST['nick'];
                      $comentario=$_POST['comentario'];

                            $reg=new Comentario();
                            $r=$reg->addComentario($fecha,$hora,$nick,$comentario, $id);


                      }else{
                      $id=  $_GET['id'];
                      }
                            $reg=new Blog();
                            $r=$reg->leerblogid($id);


                       ?>
                    <h3 class="letraBlanca text-center text-uppercase"><?php echo $r[0]['titulo_art'] ?></h3>
                    <br>
                    <div class="container">

                              <div class="col-lg-8">
                             <img class="img-thumbnail" src="bootstrap/images/<?php echo $r[0]['img_art'] ?>" >
                              <br>
                                <br>
                             </div>

                              <div class="col-lg-8">
                                  <h3 class="letraBlanca text-justify"><?php echo $r[0]['cont_art'] ?></h3>
                             </div>





                       <?php

                       ?>

                    </div>
                    <br>
                    <br>
                    <br>
                     <a href="?url=blog" class="btn btn-danger"> Volver Lista De BLog </a>
                     <br>
                     <br>

                   <br>

                </div>
                <div class="col-lg-4">
                    <br><br>

                    <br><br>
                    <div class="container-fluid" style='background-image:url(bootstrap/images/orig_83355.jpg)'>
                        <br><br>
                        <h3 class="letraBlanca">Deje Su Comentario</h3>
                        <form action="" name="form_comentario" id="form_comentario" class="" method="post">

                                    <div class="">

                                        <input class="form-control" name="nick" id="nick" placeholder="Nick">
                                    </div>
                                    <br>
                                     <div class="">

                                         <input class="form-control" name="comentario" id="comentario" placeholder="Comentario">
                                    </div>

                                          <br>
                                    <button type="submit" class="btn btn-primary">Comentar</button>
                                    <input type="hidden" name="id_art" value="<?php echo $id; ?>">
                                    <br><br>
                       </form>
                        <br><br>

                                    <?php
                                            $reg=new Comentario();
                                            $r=$reg->leerComentario2($id);

                                            for($j=0;$j<count($r);$j++){
                                    ?>
  <br>
                        <div class="container-fluid ">
                            <br>
                            <div class="jumbotron">


                                      <em class="text-danger text-center"><?php echo strtoupper($r[$j]['nick']); ?> </em>
                                     <br>
                                  <mark class="text-danger pull-left"><?php
                                  $fecha= implode("-", array_reverse(explode("-", $r[$j]['fecha'])));
                                     echo  $fecha;
                                  ?> </mark>
                                   <mark class="text-danger pull-right"><?php echo $r[$j]['hora']; ?> </mark>
                                   <br>
                                   <br>

                                    <div class="container bg-primary">
                                      <br>
                                   <span class="text-justify  text-uppercase"><?php echo $r[$j]['comentario']; ?></span>
                                     <br>
                                     <br>
                                 </div>

                         </div>
                         <br>

                         </div>

                                      <?php
                                                }
                                      ?>
                        </div>
                </div>




            </div>
            <br><br>
        </div>

    </section>
