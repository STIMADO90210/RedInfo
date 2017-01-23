<?php
        if (isset($_POST['enviar'])and $_POST['enviar']!=''){


            $codinf=$_POST['codinf'];
            $nombinf=$_POST['nombinf'];
            $dirinf=$_POST['dirinf'];
            $telfinf=$_POST['telfinf'];
            $logoinf=$_POST['imagen'];
             $id=$_POST['id'];

          if($_POST['enviar']=='add'){
                $reg=new Infocentro();
                $r=$reg->addinfo($codinf, $nombinf, $dirinf, $telfinf, $logoinf);
                ?>
                        <script>
                            alert('se guardo el INFOCENTRO correctamente');
                            window.location='?url2=infocentro';
                        </script>
                <?php
            }

            if($_POST['enviar']=='edit'){
                $reg=new Infocentro();
                $r=$reg->editInfo_id($codinf, $nombinf,$dirinf,$telfinf,$logoinf,$id);

                ?>
                        <script>
                            alert('se Actualizo el INFOCENTRO correctamente');
                            window.location='?url2=infocentro';
                        </script>
                <?php
            }

            if($_POST['enviar']=='delete'){
                $reg=new Infocentro();
                $r=$reg->deleteInfo_id($id);

                ?>
                        <script>
                            alert('se Elimino el INFOCENTRO correctamente');
                            window.location='?url2=infocentro';
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
                    <h3 class="text-center text-danger">INFOCENTRO NUEVO</h3>

                    <br>
                    <br>
               <?php
                    if(isset($_GET['operacion'])){
                            $opera=$_GET['operacion'];
                            if(($opera=='edit')or ($opera=='delete')){
                                if(isset($_GET['id'])){
                                $reg=new Infocentro();
                                $r=$reg->leerInfo_id($_GET['id']);
                                }
                            }

                    }

               ?>
                <div class="col-lg-10">

                    <form name="form1" id="form1" method="POST" action="" class="form-group col-lg-offset-2">
                        <div class="form-group">
                            <label class="">Codigo Infocentro</label>
                            <input class="form-control fondoCeleste letraBlanca" name="codinf" value="<?php if(($opera=='edit')or ($opera=='delete')){echo $r[0]['cod_inf'];} ?> " >
                        </div>
                         <div class="form-group">
                             <label class="">Nombre Infocentro</label>
                            <input class="form-control fondoCeleste letraBlanca" name="nombinf" value="<?php if(($opera=='edit')or ($opera=='delete')){echo $r[0]['nombre_inf'];} ?> " >
                        </div>
                        <div class="form-group">
                             <label class="">Direccion Infocentro</label>
                            <input class="form-control fondoCeleste letraBlanca" name="dirinf" value="<?php if(($opera=='edit')or ($opera=='delete')){echo $r[0]['direccion_inf'];} ?> " >
                        </div>
                        <div class="form-group">
                             <label class="">Telefono Infocentro</label>
                            <input class="form-control fondoCeleste letraBlanca" name="telfinf" value="<?php if(($opera=='edit')or ($opera=='delete')){echo $r[0]['telf_inf'];} ?> " >
                        </div>
                        <div class="form-group col-lg-8">

                        <input class="form-control fondoCeleste letraBlanca" name="imagen" type="text" value="<?php if(($opera=='edit')or ($opera=='delete')){echo $r[0]['logo_inf'];} ?> " >

                        </div>
                        <a onclick="javascript:subirimagen();" class="btn btn-danger">BUSCAR LOGO</a>

                    <div class="clearfix"></div>
                    <br>
                    <br>
                         <div class="form-group">
                             <?php if($opera=='add'){?>
                             <button type="submit" name="enviar" value="<?php echo $opera ?>" class="btn btn-primary">Guardar Infocentro</button>
                             <?php } ?>
                             <?php if($opera=='edit'){?>
                             <button type="submit" name="enviar" value="<?php echo $opera ?>" class="btn btn-primary">Actualizar Infocentro</button>
                             <input type="hidden" name="id" value="<?php echo $r[0]['id_inf'] ?>">
                             <?php } ?>
                              <?php if($opera=='delete'){?>
                             <button type="submit" name="enviar" value="<?php echo $opera ?>" class="btn btn-primary">Eliminar Infocentro</button>
                             <input type="hidden" name="id" value="<?php echo $r[0]['id_inf'] ?>">
                             <?php } ?>
                             <a href="?url2=infocentro" class="btn btn-danger  ">Cancelar </a>
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
