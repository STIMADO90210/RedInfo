
    <section>
            <article>

            <div class="col-lg-8 fondoCeleste pull-right">
                <br>


                <div class="fondoBlanco">
                    <br>
                    <h3 class="text-center text-danger">VISITANTES</h3>
                    <a href="?url2=addvisita&operacion=add" class="btn btn-primary col-lg-offset-1"> Nuevo Visitante</a>
                    <br>
                    <br>

                <div class="">
                    <table class="table">
                        <tr class="text-center ">
                            <td>Id</td>
                            <td>Visitante</td>
                            <td>Cedula</td>
                            <td>Telefono</td>
                            <td>Fecha Nacimiento</td>
                            <td colspan="2">Acciones</td>
                        </tr>
                        <?php
                        $mostrar=5;
                        $pag=0;
                        $inicio=0;
                        if(isset($_GET['pag'])){
                            $pag=$_GET['pag'];
                            if($pag>1){

                        $inicio=($pag-1)*$mostrar;

                            }
                        }
                                $reg=new Visitas();
                                
                                $r=$reg->leervisitapag($inicio,$mostrar);

                               for($i=0;$i<count($r);$i++){
                        ?>
                        <tr class="text-center text-danger">
                            <td><?php echo $r[$i]['id_user'] ?></td>
                            <td><?php echo strtoupper($r[$i]['nombre_user']) ?></td>
                            <td><?php echo strtoupper($r[$i]['cedula_user']) ?></td>
                             <td><?php echo strtoupper($r[$i]['telefono_user']) ?>
                             <td><?php echo strtoupper($r[$i]['fecha_nac']) ?>
                                 
                             </td>

                            <td ><a href="?url2=addblogs&operacion=edit&id=<?php echo $r[$i]['id_art'] ?>" class="btn btn-success">EDITAR  </a></td>
                            <td ><a href="?url2=addblogs&operacion=delete&id=<?php echo $r[$i]['id_art'] ?>" class="btn btn-danger">ELIMINAR  </a></td>
                        </tr>

                               <?php  } ?>
                    </table>
                     <br>
                </div>
                    <?php


                            $pagina=new visitas();
                            $p=$pagina->leervisita();
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
                                <a href="?url2=visita&pag=<?php echo $n ?>"> <?php echo $n ?></a>
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
