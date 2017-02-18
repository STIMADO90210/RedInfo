  <section>
        <div class="container fondoCeleste">
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
                    <h3 class="text-white text-lg-center"><?php echo strtoupper($r[0]['titulo_art']) ?></h3>
                    <br>
                    <div class="container">

                              <div class="col-lg-8 col-lg-offset-2">
                             <img class="img-thumbnail" src="assets/images/<?php echo $r[0]['img_art'] ?>" >
                              <br>
                                <br>
                             </div>

                              <div class="col-lg-12">
                                  <h5 class="text-white text-justify"><?php echo $r[0]['cont_art'] ?></h5>
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
                    <div class="container fondoVerde">
                        <br><br>
                        <h3 class="text-white">Deje Su Comentario</h3>
                        <form action="" name="form_comentario" id="form_comentario" class="form-control" method="post">
                                    <br>

                                    <br>
                                    <div class="form-group">

                                        <input class="form-control" name="nick" id="nick" placeholder="Nick">                            
                                    </div>
                                     <div class="form-group">

                                         <input class="form-control" name="comentario" id="comentario" placeholder="Comentario">                            
                                    </div>


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
                        
                        <div class="container ">
                            <br>
                            <div class="container fondoGris">
                            <br>
                            
                            <em class="text-danger text-lg-center"><?php echo strtoupper($r[$j]['nick']); ?> </em>
                        <br>
                        <mark class="text-danger pull-lg-left"><?php 
                        $fecha= implode("-", array_reverse(explode("-", $r[$j]['fecha'])));
                           echo  $fecha; 
                        ?> </mark>
                         <mark class="text-danger pull-lg-right"><?php echo $r[$j]['hora']; ?> </mark>
                         <br>
                         <strong class="text-justify"><?php echo $r[$j]['comentario']; ?></strong>
                         <br>
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
