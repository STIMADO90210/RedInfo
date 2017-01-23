  <section>
        <div class="container fondoCeleste">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <br>
                     
                    <h1 class="text-lg-center text-white">Blog Del Infocentro</h1>
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
                            <div class="container fondoGris">
                                <br>
                              <br>
                             <h3 class="text-white text-lg-center"><?php echo $r[$j]['titulo_art'] ?></h3>
                             <img class="img-thumbnail" src="assets/images/<?php echo $r[$j]['img_art'] ?>" >
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