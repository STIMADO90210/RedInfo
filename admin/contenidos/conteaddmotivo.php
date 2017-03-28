<?php
        if (isset($_POST['enviar'])and $_POST['enviar']!=''){


            $motivo=$_POST['motivo'];
           


          if($_POST['enviar']=='add'){
                $reg=new MotVisita();
                $r=$reg->addmotivo($motivo);
                ?>
                        <script>
                            alert('se guardo motivo correctamente');
                            window.location='?url2=motivo';
                        </script>
                <?php
            }

            if($_POST['enviar']=='edit'){
               $id=$_POST['id'];
               
                $reg=new MotVisita();
                $r=$reg->editmotivoid($motivo,$id);

                ?>
                        <script>
                            alert('se Actualizo motivo correctamente');
                            window.location='?url2=motivo';
                        </script>
                <?php
            }

            if($_POST['enviar']=='delete'){
               $id=$_GET['id'];
               
                $reg=new MotVisita();
                $r=$reg->deletemotivoid($id);

                ?>
                        <script>
                            alert('se Elimino motivo correctamente');
                            window.location='?url2=motivo';
                        </script>
                <?php
            }



        }





?>


    <section>
            <article>

            <div class="col-lg-9 fondoCeleste pull-right col-lg-offset-2">
                <br>


                <div class="fondoBlanco">
                    <br>
                    <h3 class="text-center text-danger">MOTIVO NUEVA</h3>

                    <br>
                    <br>
               <?php
                
                    if($_GET['operacion']){
                       
                            $opera=$_GET['operacion'];
                            if(($opera=='edit') or ($opera=='delete')){
                                if(isset($_GET['id'])){
                                $reg=new MotVisita();
                                $r=$reg->leermotivoid($_GET['id']);
                                
                                }
                            }

                    }

               ?>
                <div class="col-lg-10">

                    <form name="form1" id="form1" method="POST" action="" class="form-group col-lg-offset-2">
                        <div class="form-group col-lg-4">
                            <label class="">Motivo</label>
                            
                            <input class="form-control fondoCeleste letraBlanca" name="motivo" value="<?php if(($opera=='edit')or ($opera=='delete')){echo $r[0]['MotVisita'];}  ?> " >
                        </div>

                        

                      
                       
                       

                    <div class="clearfix"></div>
                    <br>
                    <br>
                         <div class="form-group">
                             <?php if($opera=='add'){?>
                             <button type="submit" name="enviar" value="<?php echo $opera ?>" class="btn btn-primary">Guardar motivo</button>
                             <?php } ?>
                             <?php if($opera=='edit'){?>
                             <button type="submit" name="enviar" value="<?php echo $opera ?>" class="btn btn-primary">Actualizar motivo</button>
                             <input type="hidden" name="id" value="<?php echo $r[0]['id_mot'] ?>">
                             <?php } ?>
                              <?php if($opera=='delete'){?>
                             <button type="submit" name="enviar" value="<?php echo $opera ?>" class="btn btn-primary">Eliminar motivo</button>
                             <input type="hidden" name="id" value="<?php echo $r[0]['id_mot'] ?>">
                             <?php } ?>
                             <a href="?url2=motivo" class="btn btn-danger  ">Cancelar </a>
                        </div>

                    </form>
                        <br>

                </div>
                    <div class="clearfix"></div>
                </div>
                 <br>
                  <br>
           </div>
       </article>

         </section>

<script>
 function subirimagen()
  {
	  self.name = 'opener';
	  remote = open('subirimg.php','remote','toolbar=yes, scrollbars=yes, resizable=yes, top=100, left=100, width=1150, height=500');
	  remote.focus();

  }
  </script>
