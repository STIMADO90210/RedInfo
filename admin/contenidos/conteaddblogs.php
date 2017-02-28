<?php
        if (isset($_POST['enviar'])and $_POST['enviar']!=''){


            $fecha=$_POST['fecha_art'];
            $titulo=$_POST['titulo_art'];
            $contenido=$_POST['cont_art'];
            $logoblog=$_POST['imagen'];


          if($_POST['enviar']=='add'){
                $reg=new blog();
                $r=$reg->addblog($fecha, $titulo,$contenido, $logoblog);
                ?>
                        <script>
                            alert('se guardo el BLOG correctamente');
                            window.location='?url2=blogs';
                        </script>
                <?php
            }

            if($_POST['enviar']=='edit'){
               $id=$_POST['id'];
                $reg=new Blog();
                $r=$reg->editblogid($fecha, $titulo,$contenido, $logoblog,$id);

                ?>
                        <script>
                            alert('se Actualizo el BLOG correctamente');
                            window.location='?url2=blogs';
                        </script>
                <?php
            }

            if($_POST['enviar']=='delete'){
               $id=$_POST['id'];
                $reg=new Blog();
                $r=$reg->deleteblogid($id);

                ?>
                        <script>
                            alert('se Elimino el BLOG correctamente');
                            window.location='?url2=blogs';
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
                    <h3 class="text-center text-danger">BLOG NUEVO</h3>

                    <br>
                    <br>
               <?php
                    if(isset($_GET['operacion'])){
                            $opera=$_GET['operacion'];
                            if(($opera=='edit')or ($opera=='delete')){
                                if(isset($_GET['id'])){
                                $reg=new blog();
                                $r=$reg->leerblogid($_GET['id']);
                                }
                            }

                    }

               ?>
                <div class="col-lg-10">

                    <form name="form1" id="form1" method="POST" action="" class="form-group col-lg-offset-2">
                        <div class="form-group col-lg-4">
                            <label class="">Fecha</label>
                            <input class="form-control fondoCeleste letraBlanca" name="fecha_art" value="<?php if(($opera=='edit')or ($opera=='delete')){echo $r[0]['fecha_art'];} ?> " >
                        </div>

                         <div class="form-group col-lg-8">
                             <label class="">Titulo</label>
                            <input class="form-control fondoCeleste letraBlanca" name="titulo_art" value="<?php if(($opera=='edit')or ($opera=='delete')){echo $r[0]['titulo_art'];} ?> " >
                        </div>

                        <div class="form-group">
                             <label class="">Contenido</label>
                              <textarea class="form-control fondoceleste " name="cont_art" rows="6" >
                                <?php
                                  if(($opera=='edit')or ($opera=='delete')){
                                    echo   $r[0]['cont_art'];
                                  }
                                ?>
                              </textarea>


                        </div>
                          <br><br>
                        <div class="form-group col-lg-8">

                        <input class="form-control fondoCeleste letraBlanca" name="imagen" type="text" value="<?php if(($opera=='edit')or ($opera=='delete')){echo $r[0]['img_art'];} ?> " >

                        </div>
                        <a onclick="javascript:subirimagen();" class="btn btn-danger">BUSCAR LOGO</a>

                    <div class="clearfix"></div>
                    <br>
                    <br>
                         <div class="form-group">
                             <?php if($opera=='add'){?>
                             <button type="submit" name="enviar" value="<?php echo $opera ?>" class="btn btn-primary">Guardar Blog</button>
                             <?php } ?>
                             <?php if($opera=='edit'){?>
                             <button type="submit" name="enviar" value="<?php echo $opera ?>" class="btn btn-primary">Actualizar Blog</button>
                             <input type="hidden" name="id" value="<?php echo $r[0]['id_art'] ?>">
                             <?php } ?>
                              <?php if($opera=='delete'){?>
                             <button type="submit" name="enviar" value="<?php echo $opera ?>" class="btn btn-primary">Eliminar Blog</button>
                             <input type="hidden" name="id" value="<?php echo $r[0]['id_art'] ?>">
                             <?php } ?>
                             <a href="?url2=blogs" class="btn btn-danger  ">Cancelar </a>
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
