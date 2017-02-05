<section>
        <div class="container fondoCeleste">
            
            <div class="clearflix"></div>
            <br>
            <h1 class="text-lg-center text-white">Visitantes Nuevos</h1>
            <br>
 <div class="col-lg-10">
                 <form name="form1" id="form1" method="POST" action="" class="form-group col-lg-offset-2">
                    <div class="form-group col-lg-4">
                            <label class="">Cedula Visitante</label>
                            <input class="form-control fondoCeleste letraBlanca" name="cedula_user" value=" " >
                        </div>
                        <div class="form-group col-lg-8">
                            <label class="">Nombre Visitante</label>
                            <input class="form-control fondoCeleste letraBlanca" name="nombre_user" value="" >
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="">Telefono Visitante</label>
                            <input class="form-control fondoCeleste letraBlanca" name="telefono_user" value=" " >
                        </div>
                         <div class="form-group col-lg-4">
                           
                             <div class="row">
                             
                            <div class=" col-lg-4">
                                <label class="">Dia</label>
                            <select class="form-control" name="dia">
                                
                            <? for( $d=1;$d<32;$d++){  ?>
                              <option value="<?= $d ?>"><?= $d ?></option>
                            <? } ?>                              
                            </select>
                            </div>

                            <div class=" col-lg-4">
                                <label class="">Mes</label>
                            <select class="form-control col-lg-1" name="mes">
                                
                            <? for( $m=1;$m<13;$m++){  ?>
                              <option value="<?= $m ?>"><?= $m ?></option>
                            <? } ?>                              
                            </select>
                            </div>

                            <div class=" col-lg-4">
                                <label class="">Año</label>
                            <select class="form-control col-lg-1" name="ano">
                                
                            <? for( $ano=date('Y');$ano>1899;$ano--){  ?>
                              <option value="<?= $ano ?>"><?= $ano ?></option>
                            <? } ?>                              
                            </select>
                            </div>
                            </div>     
                        </div>
                         <div class="form-group col-lg-4">
                            <label class="">Sexo Visitante</label>
                            <select class="form-control" name="sexo">
                             <option value="f">Femenino</option>
                            <option value="m">Masculino</option>    
                             </select>
                        </div>

                         
                          <br><br>
                        <div class="form-group col-lg-8">

                        <input class="form-control fondoCeleste letraBlanca" name="imagen" type="text" value=" " >

                        </div>
                        <a onclick="javascript:subirimagen();" class="btn btn-danger">FOTO VISITANTE</a>

                    <div class="clearfix"></div>
                    <br>
                    <br>
                         <div class="form-group">
                             <?php //if($opera=='add'){?>
                             <button type="submit" name="enviar" value="<?php echo $opera ?>" class="btn btn-primary">Guardar Visitante</button>
                             <?php // } ?>
                            
                             
                             <a href="?url2=blogs" class="btn btn-danger  ">Cancelar </a>
                        </div>

                    </form>
                    </div>

                <br>  <br>  <br>
        </div>

    </section>


<script>
 function subirimagen()
  {
      self.name = 'opener';
      remote = open('subirimg.php','remote','toolbar=yes, scrollbars=yes, resizable=yes, top=100, left=100, width=1150, height=500');
      remote.focus();

  }
  </script>