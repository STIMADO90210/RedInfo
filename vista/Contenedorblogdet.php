  <section>
        <div class="container fondoCeleste">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <br>
                      <?php
                      $id=  $_GET['id'];
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
                                  <h5 class="text-white text-lg-center"><?php echo $r[0]['cont_art'] ?></h5>
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




            </div>

        </div>

    </section>
