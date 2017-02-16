  <section>
        <div class="container fondoCeleste">
           
              
                    <br>
                    <br>
                     
                    <h1 class="text-lg-center text-white">Visitantas Registradas</h1>
                    <div class="container">
                        
                      <?php if(isset($_GET['idvis'])){
                            $iduser=$_GET['idvis'];
                            $reg=new Visitas();
                            $r=$reg->leervisitaid($iduser);
                      }                                                    
                          ?>  
                    <br>
                    <h2 class="text-white">Visitante : <?php echo strtoupper($r[0]['nombre_user']); ?></h2>
                    <h2 class="text-white">Cedula    : <?php echo strtoupper($r[0]['cedula_user']); ?></h2>
                    <br>
                    <table class="table table-warning">
                        <tr class="text-lg-center table-inverse">
                            <td>Fecha</td>                            
                            <td>Dia</td>
                            <td>Motivo De Visita</td>
                            
                        </tr>
                        <?php
                        
                                $reg=new MotVisita();
                                $r=$reg->listamotivoid($iduser);
                               
                                for($i=0;$i<count($r);$i++){
                                    $fecha= implode("-", array_reverse(explode("-", $r[$i]['fec_vis']))); 
                                    //$f=explode('-', $r[$i]['fec_vis']);
                                    //$fecha=$f[2].'-'.$f[1].'-'.$f[0];                                                                     
                                    $fec=strtotime($r[$i]['fec_vis']);
                                    $nrodia=date('w', $fec);
                                    
                        ?>
                         <tr class="text-lg-center table-success">
                             <td><?php echo $fecha; ?></td>
                            <td><?php echo $dias[$nrodia]; ?></td>
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