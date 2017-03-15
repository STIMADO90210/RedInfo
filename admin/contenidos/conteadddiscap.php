<?php
        if (isset($_POST['enviar'])and $_POST['enviar']!=''){


            $discap=$_POST['discap'];
           


          if($_POST['enviar']=='add'){
                $reg=new Discap();
                $r=$reg->adddiscap($discap);
                ?>
                        <script>
                            alert('se guardo el DISCAPACIDAD correctamente');
                            window.location='?url2=discap';
                        </script>
                <?php
            }

            if($_POST['enviar']=='edit'){
               $id=$_POST['id'];
               var_dump($id);
                $reg=new Discap();
                $r=$reg->editdiscapid($discap,$id);

                ?>
                        <script>
                            alert('se Actualizo LA DISCAPAC correctamente');
                            window.location='?url2=discap';
                        </script>
                <?php
            }

            if($_POST['enviar']=='delete'){
               $id=$_GET['id'];
               
                $reg=new Discap();
                $r=$reg->deletediscapid($id);

                ?>
                        <script>
                            alert('se Elimino LA DISCAPAPACIDAD correctamente');
                            window.location='?url2=discap';
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
                    <h3 class="text-center text-danger">DISCAPACIDAD NUEVA</h3>

                    <br>
                    <br>
               <?php
                
                    if($_GET['operacion']){
                       
                            $opera=$_GET['operacion'];
                            if(($opera=='edit') or ($opera=='delete')){
                                if(isset($_GET['id'])){
                                $reg=new Discap();
                                $r=$reg->leerdiscapid($_GET['id']);
                                }
                            }

                    }

               ?>
                <div class="col-lg-10">

                    <form name="form1" id="form1" method="POST" action="" class="form-group col-lg-offset-2">
                        <div class="form-group col-lg-4">
                            <label class="">Discapacidad</label>
                            <input class="form-control fondoCeleste letraBlanca" name="discap" value="<?php if(($opera=='edit')or ($opera=='delete')){echo $r[0]['discap'];} ?> " >
                        </div>

                        

                      
                       
                       

                    <div class="clearfix"></div>
                    <br>
                    <br>
                         <div class="form-group">
                             <?php if($opera=='add'){?>
                             <button type="submit" name="enviar" value="<?php echo $opera ?>" class="btn btn-primary">Guardar Discapacidad</button>
                             <?php } ?>
                             <?php if($opera=='edit'){?>
                             <button type="submit" name="enviar" value="<?php echo $opera ?>" class="btn btn-primary">Actualizar Discapacidad</button>
                             <input type="hidden" name="id" value="<?php echo $r[0]['id_art'] ?>">
                             <?php } ?>
                              <?php if($opera=='delete'){?>
                             <button type="submit" name="enviar" value="<?php echo $opera ?>" class="btn btn-primary">Eliminar Discapacidad</button>
                             <input type="hidden" name="id" value="<?php echo $r[0]['id_art'] ?>">
                             <?php } ?>
                             <a href="?url2=discap" class="btn btn-danger  ">Cancelar </a>
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
