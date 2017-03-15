
   <section>
            <article>

            <div class="col-lg-9 fondoCeleste pull-right col-lg-offset-2">
                <br>
                <br>
                <br>
                 <h1 class="letraBlanca text-center">PANEL ADMINISTRATIVO</h1>
                <br>
                <br>
                <br>
                 <?php
                 
                      if(isset($_SESSION['nivel_user']) and $_SESSION['nivel_user']==0){
                  ?>
                 <div class="row">
                  <?php
                        $reg=new Infocentro;
                        $r=$reg->leerInfo();
                        $c=0;
                        for($j=1;$j<count($r);$j++){
                            $info=$r[$j]['id_inf'];
                  ?>
                  
  <div class="col-sm-4 col-md-3">
    <div class="thumbnail">
      
        <img src="../bootstrap/images/<?php  echo $r[$j]['logo_inf'] ?>" width="50" alt="...">
       
        
      <div class="caption">
          <h5 class="text-uppercase text-center"><?php echo $r[$j]['nombre_inf'] ?></h5>
          <br>
          <br>
        <p>
                    <?php 
                            $regis=new Visitas();
                            $regi=$regis->leervisita3($info);
                         
                    ?>
            <a href="#" class="btn btn-primary" role="button">registrados <span class="badge"><?php echo count($regi) ?> </span></a>
             </p>
                        <?php
                            $regvisita= new MotVisita();
                            $rv=$regvisita->totalvisitas($info);
                        ?>
              <p>
                  <a href="#" class="btn btn-danger" role="button">Visitas <span class="badge"><?php echo count($rv) ?></span></a>
        </p>
      </div>
    </div>
  </div>
                        <?php
                        $c++;
                        if($c==4){
                            $c=0;
                            ?>
                  <div class="clearfix"></div>
                             <?php
                        }
                        
                        }
                        ?>
                        <div id="canvas-holder" class="" style="width:60%">
                             <canvas id="chart-area" width="350" height="200" />
                        </div>
                  
                  
</div>
                <?php
                      }
                  ?>
                
                
               

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                </div>

       </article>

         </section>
