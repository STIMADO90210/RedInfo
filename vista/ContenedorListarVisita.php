  <section>
        <div class="container-fluid fondoCeleste">
           
              
                    <br>
                    <br>
                     
                    <h1 class="text-lg-center text-white">Visitantes Registrados</h1>
                    <div class="container-fluid">
                        
                        
                    <br><br>
                    <table class="table table-warning">
                        <tr class="text-lg-center table-inverse">
                            <td>ID</td>
                            <td>Nombre</td>
                            <td>Cedula</td>
                            <td>Edad</td>
                            <td>Email</td>
                            <td> Inscripcion.</td>
                            <td># Vis.</td>
                            <td>Status</td>
                            <td colspan="2">Acciones</td>
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
                                $cant=status($r[$i]['id_user']);
//                                        contdias($r[$i]['fecha_inscrip']);
                                    if($cant<2){$status="NUEVO";}else{$status="REGULAR";}
                                    $edad=date('Y-m-d')-$r[$i]['fecha_nac'];
                                    
                        ?>
                         <tr class="text-lg-center table-success">
                             <td><?php echo $r[$i]['id_user'] ?></td>
                             <td><strong><?php echo strtoupper($r[$i]['nombre_user']) ?></strong></td>
                            <td><?php echo $r[$i]['cedula_user'] ?></td>
                            <td><?php echo $edad  ?></td>
                            <td><?php echo $r[$i]['email_user'] ?></td>
                            <td><?php echo date('d-m-Y',strtotime($r[$i]['fecha_inscrip'])) ?></td>
                            <td><?php echo $r[$i]['cont_vis'] ?></td>
                            <td><?php echo $status; ?></td>
                            <td><a href="?url=VisitasReg&idvis=<?php echo $r[$i]['id_user'] ?>" class="btn btn-primary">Visitas Registradas</a></td>
                            <td><a href="?url=RegVisitas&ced=<?php echo $r[$i]['cedula_user'] ?>" class="btn btn-danger">Registrar Visita</a></td>
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