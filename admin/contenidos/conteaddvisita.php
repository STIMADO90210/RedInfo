<?php
        if (isset($_POST['enviar'])and $_POST['enviar']!=''){

            $cedula=$_POST['cedula_user'];
            $nombre=$_POST['nombre_user'];
            $telefono=$_POST['telefono_user'];
            $fecha_nac=$_POST['fecha_nac'];
            $sexo_user=$_POST['sexo_user'];
            $foto_user=$_POST['foto_user'];
          


          if($_POST['enviar']=='add'){
                $reg=new blog();
                $r=$reg->addblog($fecha, $titulo,$contenido, $logoblog);
                ?>
                        <script>
                            alert('se guardo el Visitante correctamente');
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
                            alert('se Actualizo el Visitante correctamente');
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
                            alert('se Elimino el Visitante correctamente');
                            window.location='?url2=blogs';
                        </script>
                <?php
            }



        }





?>


    <section>
            <article>

            <div class="col-lg-8 fondoCeleste pull-right">
                <br>


                <div class="fondoBlanco">
                    <br>
                    <h3 class="text-center text-danger">VISITANTE NUEVO</h3>

                    <br>
                    <br>
               <?php
                    if(isset($_GET['operacion'])){
                            $opera=$_GET['operacion'];
                            if(($opera=='edit')or ($opera=='delete')){
                                if(isset($_GET['id'])){
                                $reg=new visitas();
                                $r=$reg->leervisitaid($_GET['id']);
                                }
                            }

                    }

               ?>
                <div class="col-lg-10">

                    <form name="form1" id="form1" method="POST" action="" class="form-group col-lg-offset-2">
                    <div class="form-group col-lg-4">
                            <label class="">Cedula Visitante</label>
                            <input class="form-control fondoCeleste letraBlanca" name="cedula_user" value="<?php if(($opera=='edit')or ($opera=='delete')){echo $r[0]['nombre_user'];} ?> " >
                        </div>
                        <div class="form-group col-lg-8">
                            <label class="">Nombre Visitante</label>
                            <input class="form-control fondoCeleste letraBlanca" name="nombre_user" value="<?php if(($opera=='edit')or ($opera=='delete')){echo $r[0]['nombre_user'];} ?> " >
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="">Telefono Visitante</label>
                            <input class="form-control fondoCeleste letraBlanca" name="telefono_user" value="<?php if(($opera=='edit')or ($opera=='delete')){echo $r[0]['nombre_user'];} ?> " >
                        </div>
                         <div class="form-group col-lg-4">
                            <label class="">Fecha Nacimiento</label>
                            <input class="form-control fondoCeleste letraBlanca" name="fecha_nac" value="<?php if(($opera=='edit')or ($opera=='delete')){echo $r[0]['fecha_nac'];} ?> " >
                        </div>
                         <div class="form-group col-lg-4">
                            <label class="">Sexo Visitante</label>
                            <input class="form-control fondoCeleste letraBlanca" name="sexo_user" value="<?php if(($opera=='edit')or ($opera=='delete')){echo $r[0]['sexo_user'];} ?> " >
                        </div>

                         
                          <br><br>
                        <div class="form-group col-lg-8">

                        <input class="form-control fondoCeleste letraBlanca" name="imagen" type="text" value="<?php if(($opera=='edit')or ($opera=='delete')){echo $r[0]['img_user'];} ?> " >

                        </div>
                        <a onclick="javascript:subirimagen();" class="btn btn-danger">FOTO VISITANTE</a>

                    <div class="clearfix"></div>
                    <br>
                    <br>
                         <div class="form-group">
                             <?php if($opera=='add'){?>
                             <button type="submit" name="enviar" value="<?php echo $opera ?>" class="btn btn-primary">Guardar Visitante</button>
                             <?php } ?>
                             <?php if($opera=='edit'){?>
                             <button type="submit" name="enviar" value="<?php echo $opera ?>" class="btn btn-primary">Actualizar Visitante</button>
                             <input type="hidden" name="id" value="<?php echo $r[0]['id_art'] ?>">
                             <?php } ?>
                              <?php if($opera=='delete'){?>
                             <button type="submit" name="enviar" value="<?php echo $opera ?>" class="btn btn-primary">Eliminar Visitante</button>
                             <input type="hidden" name="id" value="<?php echo $r[0]['id_user'] ?>">
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
