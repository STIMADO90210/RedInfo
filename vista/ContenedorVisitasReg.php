  <section>
        <div class="container-fluid" style='background-image:url(bootstrap/images/fondo-azul-claro.jpg)'>
           
              
                    <br>
                    <br>
                     
                    <h1 class="text-center letraBlanca">Visitantas Registradas</h1>
                    <div class="jumbotron" >
                        
                      <?php if(isset($_GET['idvis'])){
                            $iduser=$_GET['idvis'];
                            $reg=new Visitas();
                            $r=$reg->leervisitaid($iduser);
                      }                                                    
                          ?>  
                    <br>
                    <h2 class="">Visitante : <?php echo strtoupper($r[0]['nombre_user']); ?></h2>
                    <h2 class="">Cedula    : <?php echo strtoupper($r[0]['cedula_user']); ?></h2>
                    <br>
                    <a href="reportes/imprepinv.php?dat=<?php echo $iduser ?>" class="text-uppercase btn btn-primary pull-right">imprimir reporte</a>
                     <br>
                     <br>
                    <table class="table table-bordered">
                        <tr class="table-success text-uppercase ">
                            <th class="text-center bg-primary ">Dia</th>
                            <th class="text-center bg-primary">Fecha</th>                                                        
                            <th class="text-center bg-primary">Motivo De Visita</th>
                            
                        </tr>
                        <?php
                        
                                $reg=new MotVisita();
                                $r=$reg->listamotivoid($iduser);
                               
                                for($i=0;$i<count($r);$i++){
                            
                                    $fecha= implode("-", array_reverse(explode("-", $r[$i]['fec_vis'])));                                                                                                         
                                    $fec=strtotime($r[$i]['fec_vis']);
                                    $nrodia=date('w', $fec);
                                                     
                                          ?>
                                           <tr class="text-center  text-uppercase">

                                                <td><?php echo $dias[$nrodia]; ?></td>
                                               <td><?php echo $fecha; ?></td>                           
                                              <td><?php echo strtoupper(buscarmotivo($r[$i]['id_mot'])); ?></td>

                                          </tr>
                                 <?php
                                           
                                }
                                ?>
                    </table>
                     
                    <br><br>
                    
                    </div>
                    <br>
                    <br>
               
                
                
              
                
            
        
        </div> 
        
    </section>