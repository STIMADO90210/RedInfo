<?php
        if (isset($_POST['enviar'])and $_POST['enviar']!=''){
            $id=$_POST['id_user'];
            $cedula=$_POST['cedula_user'];
            $nombre=$_POST['nombre_user'];
            $telefono=$_POST['telefono_user'];
            $email=$_POST['email_user'];
            $fecha_nac=date('Y-m-d',strtotime($_POST['fecha_nac']));
            $sexo=$_POST['sexo_user'];
           
          


          if($_POST['enviar']=='add'){
                $reg=new Visitas();
                $r=$reg->reg_visitas($cedula,$nombre,$telefono,$email, $fecha_nac,$sexo,$id);
                ?>
                        <script>
                            alert('se guardo el Visitante correctamente');
                            window.location='?url2=visita';
                        </script>
                <?php
            }

            if($_POST['enviar']=='edit'){
              
               $id=$_POST['id'];
                $reg=new Visitas();
                $r=$reg->editvisitaid($cedula, $nombre,$telefono,$email, $fecha_nac,$sexo,$id);
                    
                ?>
                        <script>
                            alert('se Actualizo el Visitante correctamente');
                           window.location='?url2=visita';
                        </script>
                <?php
//                 
            }

            if($_POST['enviar']=='delete'){
               $id=$_POST['id'];
                $reg=new Visitas();
                $r=$reg->deletevisitagid($id);

                ?>
                        <script>
                            alert('se Elimino el Visitante correctamente');
                            window.location='?url2=visita';
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
                            <input class="form-control fondoCeleste letraBlanca" name="cedula_user" value="<?php if(($opera=='edit')or ($opera=='delete')){echo $r[0]['cedula_user'];} ?> " >
                        </div>
                        <div class="form-group col-lg-8">
                            <label class="">Nombre Visitante</label>
                            <input class="form-control fondoCeleste letraBlanca" name="nombre_user" value="<?php if(($opera=='edit')or ($opera=='delete')){echo $r[0]['nombre_user'];} ?> " >
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="">Telefono Visitante</label>
                            <input class="form-control fondoCeleste letraBlanca" name="telefono_user" value="<?php if(($opera=='edit')or ($opera=='delete')){ echo $r[0]['telefono_user']; } ?> " >
                        </div>
                         <div class="form-group col-lg-4">
                            <label class="">Fecha Nacimiento</label>
                            <input class="form-control fondoCeleste letraBlanca" name="fecha_nac" value="<?php if(($opera=='edit')or ($opera=='delete')){ echo date('d-m-Y',strtotime($r[0]['fecha_nac'])); } ?> " >
                        </div>
                         <div class="form-group col-lg-4">
                            <label class="">Sexo Visitante</label>
                            <select name="sexo_user" class="form-control fondoCeleste letraBlanca">
                                <option value="m">Masculino</option>
                                <option value="f">Femenino</option>
                            </select>
                           
                        </div>

                        
                        <div class="form-group col-lg-12">
                                <label class="">Email Visitante</label>
                        <input class="form-control fondoCeleste letraBlanca" name="email_user" type="text" value="<?php if(($opera=='edit')or ($opera=='delete')){echo $r[0]['email_user'];} ?> " >

                        </div>
                      
           
                       

                    <div class="clearfix"></div>
                    <br>
                    <br>
                         <div class="form-group">
                             <?php if($opera=='add'){?>
                             <button type="submit" name="enviar" value="<?php echo $opera ?>" class="btn btn-primary">Guardar Visitante</button>
                             <?php } ?>
                             <?php if($opera=='edit'){?>
                             <button type="submit" name="enviar" value="<?php echo $opera ?>" class="btn btn-primary">Actualizar Visitante</button>
                             <input type="hidden" name="id" value="<?php echo $r[0]['id_user'] ?>">
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
