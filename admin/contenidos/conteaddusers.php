



      <?php

      if (isset($_POST['enviar'])and $_POST['enviar']!=''){
          //var_dump($_POST);
        $cedula=$_POST['cedula_user'];
        $nombre=$_POST['nombre_user'];
        $apellido=$_POST['apellido_user'];
        $email=$_POST['email_user'];
        $pass=$_POST['clave_user'];
        $img=$_POST['imagen'];
        $id_inf=$_POST['info'];
        $cargo=$_POST['nivel_user'];


          if($_POST['enviar']=='add'){
                $reg=new Users();
                $r=$reg->addusers($cedula, $nombre, $apellido,$email,$pass,$img, $id_inf, $cargo);
                ?>
                        <script>
                            alert('se guardo el Usuario correctamente');
                            window.location='?url2=users';
                        </script>
                <?php
            }

            if($_POST['enviar']=='edit'){
               $id=$_POST['id'];
                $reg=new Users();
                $r=$reg->editUserid($cedula, $nombre, $apellido,$email,$pass,$img, $id_inf, $cargo,$id);

                ?>
                        <script>
                            alert('se Actualizo el Usuario correctamente');
                            window.location='?url2=users';
                        </script>
                <?php
                  //
            }

            if($_POST['enviar']=='delete'){
               $id=$_POST['id'];
                $reg=new Users();
                $r=$reg->deleteUsersId($id);

                ?>
                        <script>
                            alert('se Elimino el Usuario correctamente');
                            window.location='?url2=users';
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
                    <h3 class="text-center text-danger">USUARIO NUEVO</h3>
                    <div class="col-lg-3 pull-right ">
                       <!-- <img class="img-rounded" id="avatar" src="../assets/images/avatar.png" width="100"> -->
                    </div>

                    <br>
                    <br>
               <?php
                    if(isset($_GET['operacion'])){

                            // document.write("You have entered : " + retVal);
                            $opera=$_GET['operacion'];
                            if(($opera=='edit')or ($opera=='delete')){
                                if(isset($_GET['id'])){
                                $reg=new Users();
                                $r=$reg->leerUsersId($_GET['id']);
                                $IdReg=$r[0]['id_user'];
                                $cargo=$r[0]['id_user'];
                                }
                            }

                    }

               ?>
                <div class="col-lg-10">

                    <form name="form1" id="form1" method="POST" action="" class="form-group col-lg-offset-2">
                        <div class="form-group col-lg-4">
                            <label class="">Cedula</label>
                            <input class="form-control fondoCeleste letraBlanca" name="cedula_user" value="<?php if(($opera=='edit')or ($opera=='delete')or ($opera=='asig')){echo $r[0]['cedula_user']; } ?> " >
                        </div>

                          <div class="clearfix"></div>
                         <div class="form-group ">
                             <label class="">Nombre</label>
                            <input class="form-control fondoCeleste letraBlanca" name="nombre_user" value="<?php if(($opera=='edit')or ($opera=='delete')or ($opera=='asig')){echo $r[0]['nombre_user'];} ?> " >
                        </div>

                        <div class="form-group ">
                            <label class="">Apellido</label>
                           <input class="form-control fondoCeleste letraBlanca" name="apellido_user" value="<?php if(($opera=='edit')or ($opera=='delete')or ($opera=='asig')){echo $r[0]['apellido_user'];} ?> " >
                       </div>

                          <div class="form-group ">
                            <label class="">Email</label>
                           <input class="form-control fondoCeleste letraBlanca" name="email_user" value="<?php if(($opera=='edit')or ($opera=='delete')or ($opera=='asig')){echo $r[0]['email_user'];} ?> " >
                       </div>

                           <div class="form-group ">
                                <label class="">Clave</label>
                                <input class="form-control fondoCeleste letraBlanca" name="clave_user" value="<?php if(($opera=='edit')or ($opera=='delete')or ($opera=='asig')){echo $r[0]['clave_user'];} ?> " >
                           </div>


                            <div class="form-group col-lg-8">

                                <input class="form-control fondoCeleste letraBlanca" id="filespri"  name="imagen" type="text" value="<?php if(($opera=='edit')or ($opera=='delete')or ($opera=='asig')){echo $r[0]['img_user'];} ?> " >

                        </div>
                          <a onclick="javascript:subirimagen();"  class="btn btn-danger">BUSCAR FOTO</a>

                          
                          
                                    
                                <div class="form-group ">
                                    <label class="">Escoja Infocentro a Administrar</label>
                                    <select class="form-control fondoCeleste letraBlanca" name="info">
                                        <option value="0"><?php if(($opera=='edit')or ($opera=='delete')){echo $cargo;} ?></option>
                                         <?php
                                         
                                                 $reg=new Infocentro();
                                                 $r=$reg->leerInfo();
                                               for($j=0;$j<count($r);$j++){
                                                 if($r[$j]['estado']==1){
                                         ?>
                                      <option value="<?php echo $r[$j]['id_inf'] ?>"><?php echo $r[$j]['nombre_inf'] ?></option>
                                               <?php
                                                 }else{
                                                 ?>
                                      <option class="text-danger" value="<?php echo $r[$j]['id_inf'] ?>"><?php echo $r[$j]['nombre_inf'] ?></option>
                                                   <?php
                                                 }
                                                 }
                                                 ?>

                                    </select>
                               </div>
                                        <?php
                                            $reg=new Cargo();
                                            $r=$reg->leerCargo();
                                        ?>

                                   
                          <div class="form-group">
                              <label class="">Escoja Cargo</label>
                              <select class="form-control fondoCeleste letraBlanca" name="nivel_user">
                                  <?php for($i=0;$i<count($r);$i++){ ?>
                                  <option value="<?php echo $r[$i]['id_nivel'] ?>"> <?php echo $r[$i]['cargo'] ?> </option>
                                  <?php } ?>

                              </select>
                          </div>

                          <br>








                    <div class="clearfix"></div>
                    <br>
                    <br>
                         <div class="form-group">
                             <?php if($opera=='add'){?>
                             <button type="submit" name="enviar" value="<?php echo $opera ?>" class="btn btn-primary">Guardar Usuario</button>
                             <?php } ?>
                             <?php if($opera=='edit'){?>
                             <button type="submit" name="enviar" value="<?php echo $opera ?>" class="btn btn-primary">Actualizar Usuario</button>
                             <input type="hidden" name="id" value="<?php echo $IdReg ?>">
                             <?php } ?>
                              <?php if($opera=='delete'){?>
                             <button type="submit" name="enviar" value="<?php echo $opera ?>" class="btn btn-primary">Eliminar Usuario</button>
                             <input type="hidden" name="id" value="<?php echo $IdReg ?>">
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

                              img =  document.getElementById('imagen').value;
                              document.getElementById('avatar').src ="../assets/images/" + img;

                      }



                      </script>
