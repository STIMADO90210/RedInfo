
    <section>
            <article>

            <div class="col-lg-9 fondoCeleste pull-right col-lg-offset-2">
                <br>


                <div class="fondoBlanco">
                    <br>
                    <h3 class="text-center text-danger">ETNIA</h3>
                    <a href="?url2=addraza&operacion=add" class="btn btn-primary col-lg-offset-1"> Nueva Etnia</a>

                    <br>
                    <br>

                <div class="">
                    <table class="table">
                        <tr class="text-center">
                            <td>Id</td>
                            <td>Etnia</td>
                            
                            <td colspan="2">Acciones</td>
                        </tr>
                        <?php
                        $mostrar=10;
                        $pag=0;
                        $inicio=0;
                        if(isset($_GET['pag'])){
                            $pag=$_GET['pag'];
                            if($pag>1){

                        $inicio=($pag-1)*$mostrar;
                            }
                        }
                                $reg=new Raza();
                                $r=$reg->leerraza2($inicio,$mostrar);
                               
                               for($i=0;$i<count($r);$i++){
                        ?>
                        <tr class="text-center text-danger">
                            <td><?php echo $r[$i]['id_raza'] ?></td>
                            <td><?php echo strtoupper($r[$i]['raza']) ?></td>
                            
                            <td ><a href="?url2=addraza&operacion=edit&id=<?php echo $r[$i]['id_raza'] ?>" class="btn btn-success">EDITAR  </a></td>
                            <td ><a href="?url2=addraza&operacion=delete&id=<?php echo $r[$i]['id_raza'] ?>" class="btn btn-danger">ELIMINAR  </a></td>
                            
                        </tr>

                               <?php  } ?>
                    </table>
                     <br>
                </div>
                    <?php


                            $pagina=new Raza();
                            $p=$pagina->leerraza();
                            $cant  =  count($p);

                            if(($cant % $mostrar)==0){
                            $nro = ($cant / $mostrar);
                            }else{
                            $nro = ($cant / $mostrar)+1;
                            }

                    ?>

                    <div class="col-lg-4 col-lg-offset-5">
                    <nav>
                        <ul class="pagination text-center">

                            <?php for($n=1;$n<=$nro;$n++){ ?>

                            <li>
                                <?php if($pag!=$n){ ?>
                                <a href="?url2=raza&pag=<?php echo $n ?>"> <?php echo $n ?></a>
                                <?php  } else { ?>
                                 <a class="u"> <?php echo $n ?></a>
                                <?php } ?>
                            </li>

                            <?php } ?>

                        </ul>
                    </nav>
                    </div>
                    <div class="clearfix"></div>

                </div>
                 <br>
                  <br>
           </div>
       </article>

         </section>
