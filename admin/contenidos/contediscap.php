
    <section>
            <article>

            <div class="col-lg-9 fondoCeleste pull-right col-lg-offset-2">
                <br>


                <div class="fondoBlanco">
                    <br>
                    <h3 class="text-center text-danger">DISCAPACIDA</h3>
                    <a href="?url2=adddiscap&operacion=add" class="btn btn-primary col-lg-offset-1"> Nueva Discapacidad</a>

                    <br>
                    <br>

                <div class="">
                    <table class="table">
                        <tr class="text-center">
                            <td>Id</td>
                            <td>Discapacidad</td>
                            
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
                                $reg=new Discap();
                                $r=$reg->leerdiscap2($inicio,$mostrar);

                               for($i=0;$i<count($r);$i++){
                        ?>
                        <tr class="text-center text-danger">
                            <td><?php echo $r[$i]['id_discap'] ?></td>
                            <td><?php echo strtoupper($r[$i]['discap']) ?></td>
                            
                            <td ><a href="?url2=adddiscap&operacion=edit&id=<?php echo $r[$i]['id_discap'] ?>" class="btn btn-success">EDITAR  </a></td>
                            <td ><a href="?url2=adddiscap&operacion=delete&id=<?php echo $r[$i]['id_discap'] ?>" class="btn btn-danger">ELIMINAR  </a></td>
                            
                        </tr>

                               <?php  } ?>
                    </table>
                     <br>
                </div>
                    <?php


                            $pagina=new Discap();
                            $p=$pagina->leerdiscap();
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
                                <a href="?url2=discap&pag=<?php echo $n ?>"> <?php echo $n ?></a>
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
