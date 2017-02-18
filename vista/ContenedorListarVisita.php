  <section>
        <div class="container fondoCeleste">
           
              
                    <br>
                    <br>
                     
                    <h1 class="text-lg-center text-white">Visitantes Registrados</h1>
                    <div class="container">
                        
                        
                    <br><br>
                    <table class="table table-warning">
                        <tr class="text-lg-center table-inverse">
                            <td>Nombre</td>                            
                            <td>Cedula</td>
                            <td>Email</td>
                            <td>Fecha Incripcion</td>
                            <td>Cantida De Visitas</td>
                            <td>Status</td>
                            <td>Acciones</td>
                        </tr>
                        <?php
                        if(isset($_POST['BusCed']) and $_POST['BusCed']!=''){
                            $ced=$_POST['BusCed'];
                                    $reg=new Visitas();
                                    $r=$reg->buscarCed($ced);
                        }else{
                                $reg=new Visitas();
                                $r=$reg->leervisita2();
                        }        
                               //$r[$i]['fecha_inscrip']
                                for($i=0;$i<count($r);$i++){
                                $cant=contdias($r[$i]['fecha_inscrip']);
                                    if($cant<30){$status="NUEVO";}else{$status="REGULAR";}
                                    
                        ?>
                         <tr class="text-lg-center table-success">
                             <td><strong><?php echo strtoupper($r[$i]['nombre_user']) ?></strong></td>
                            <td><?php echo $r[$i]['cedula_user'] ?></td>
                            <td><?php echo $r[$i]['email_user'] ?></td>
                            <td><?php echo date('d-m-Y',strtotime($r[$i]['fecha_inscrip'])) ?></td>
                            <td><?php echo $r[$i]['cont_vis'] ?></td>
                            <td><?php echo $status; ?></td>
                            <td><a href="?url=VisitasReg&idvis=<?php echo $r[$i]['id_user'] ?>" class="btn btn-danger">Visitas Registradas</a></td>
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