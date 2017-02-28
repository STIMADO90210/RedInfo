<?php 

if(isset($_POST['nombre']) and $_POST['nombre']!=''){
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$email=$_POST['nombreemail'].'@'.$_POST['email'];
$telf=$_POST['telefono'];
$fec_nac=$_POST['ano'].'-'.($_POST['mes']+1).'-'.$_POST['dia'];
$fec_inscrip=date('Y/m/d' );
$sexo=$_POST['sexo'];
$discap=$_POST['discap'];
$raza=$_POST['raza'];
$motvisita=$_POST['motvis'];
$mision=$_POST['mision'];
$tiempo=0;
$con_vis=1;
$id_inf=$_SESSION['id_inf'];


$reg=new Visitas();
$r=$reg->reg_visitas($cedula,$nombre,$email,$telf,$fec_nac,$sexo,$fec_inscrip,$tiempo,$con_vis,$id_inf);
$reg=new Visitas();
$r=$reg->leervisita();
$cant=count($r);
$nro_user=$r[$cant-1]['id_user'];

$reg=new MotVisita();
$r=$reg->regmotivo($nro_user,$motvisita,$fec_inscrip);

$reg=new Users();
$r=$reg->datusers($nro_user,$raza,$discap,$mision);
?>
<script>
        alert('Visitante se Registro Correctamente');
        window.location='?url=ListarVisita';
</script>

<?php
}
//***********************************************************************************

//if(isset($_POST) and $_POST['nombre']==''){
?>
<!--<script>
        alert('Ha Cometido un Error en uno de los campos del formulario Vuelva a LLenar Registros Correctamente');
       
</script>-->

<?php    
//}

?>

<section>
        <div class="container-fluid fondoCeleste">
            <br>
            <div class="container fondoGris">
            <br>
            
            <h1 class="text-lg-center text-white">Registrar Visitantes Nuevos</h1>
            <br>
                <div class="">
                    <form action="" method="post" class="form-group" name="form1" onsubmit="retirn validaDatos()" >                      
                          
                        <div class="">

                      

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label letra-blanca" >Cedula<span class="form-asterisk">*</span></label>
                                    <?php if(isset($_GET['ced'])){ ?>
                                    <input type="text" class="form-control" name="cedula"  value="<?php echo $_GET['ced']; ?>" id="cedula">
                                    <?php }else { ?>
                                    <input type="number" required="" class="form-control" name="cedula"   id="cedula" value="<?php if(isset($_POST['cedula'])){echo $_POST['cedula']; } ?>">
                                    <?php } ?>
                                </div>
                            </div>
                            
                              <div class="col-lg-8">
                                <div class="form-group">
                                   
                                    <label class="form-control-label letra-blanca" for="form1-0-name">Nombre y Apellido<span class="form-asterisk">*</span></label>
                                    <br>
                                    
                                    <input type="text" required="" class="form-control" name="nombre"  id="nombre" value="<?php if(isset($_POST['nombre'])){echo $_POST['nombre']; } ?>">
                                </div>
                            </div>


                            <div class="col-lg-4">
                                      <div class="form-group">

                                            <label class="form-control-label letra-blanca">Escriba Identificador de Email</label>
                                              <br>  

                                              <input type="text" required="" class="form-control" name="nombreemail" id="nombreemail" value="<?php if(isset($_POST['nombreemail'])){echo $_POST['nombreemail']; } ?>">


                                      </div>


                            </div>
                          
                            <div class="col-lg-4">
                                      <div class="form-group">

                                            <label class="form-control-label letra-blanca" >Por Favor Escoja Un Servicio Email<span class="form-asterisk"></span></label>
                                              <br>   
                                              <div class="input-group">
                                              <span class="input-group-addon">@</span>                                   
                                        <select class="form-control" name="email" id="email">
                                            
                                          <option>gmail.com</option>
                                          <option>hotmail.com</option>
                                          <option>latinmail.com</option>
                                        </select>
                                        </div>                                              
                                      </div>
                            </div>


                          

                            <div class="col-lg-4">
                                <div class="form-group">
                                    
                                    <small class="form-control-label letra-blanca">Telefono</small >
                                    
                                    <input type="number" required="" class="form-control" name="telefono" id="telefono" value="<?php if(isset($_POST['telefono'])){echo $_POST['telefono']; } ?>">
                                </div>
                            </div>
                            
                           <div class="col-lg-12">
                                <small>Fecha De Nacimiento</small>
                                <div class="form-group">
                                    
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <small class="form-control-label letra-blanca" >Dia</small>
                                    <select class="form-control" name="dia">                                        
                                        <?php for($d=1;$d<32;$d++){ ?>
                                        <option class="text-lg-left" value="<?php echo $d ?>"><?php echo $d ?></option>
                                        <?php } ?>
                                    </select>
                                        </div>
                                    </div>   
                                    <div class="col-lg-6 ">
                                         <div class="form-group">
                                              <small class="form-control-label letra-blanca">Mes</small>
                                    <select class="form-control" name="mes">
                                        <?php for($m=0;$m<12;$m++){ ?>
                                        <option class="text-lg-left" value="<?php echo $m ?>"><?php echo $mes[$m] ?></option>
                                        <?php } ?>
                                    </select>
                                         </div>
                                   </div>   
                                    <div class="col-lg-3">
                                         <div class="form-group">
                                              <small class="form-control-label letra-blanca" for="">Año</small>
                                    <select class="form-control" name="ano">
                                        <?php for($a=date('Y');$a>1900;$a--){ ?>
                                        <option class="text-lg-left" value="<?php echo $a ?>"><?php echo $a ?></option>
                                        <?php } ?>
                                    </select>
                                         </div>
                                    </div>
                                            
                                    
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                   
                                    <small  class="form-control-label letra-blanca">Sexo</small >
                                    <select class="form-control" name="sexo">
                                       
                                        <option class="text-lg-left" value="m">Masculino</option>
                                        <option class="text-lg-left" value="f">Femenino</option>
                                        
                                    </select>
                                    
                                </div>
                            </div>
                            
                            
                            <div class="col-lg-4">                                       
                                <div class="form-group">
                                    <label class="form-control-label letra-blanca" >discapacidad</label>
                                    <?php
                                        
                                        $reg=new Discap();                                                  
                                        $r=$reg->leerdiscap();
                                     ?> 
                                    <select class="form-control" name="discap"> 
                                        <option value="0">No Aplica</option>
                                        <?php   for($i=0;$i<sizeof($r);$i++){  ?>                                       
                                           <option class="" value="<?php echo $r[$i]['id_discap'] ?>"><?php echo strtoupper($r[$i]['discap']) ?></option>                                        
                                        <?php } ?>                                                                                
                                    </select>                                    
                                </div>
                            </div>
                            
                            
                            <div class="col-lg-4">
                                       
                                <div class="form-group">
                                    <label class="form-control-label letra-blanca" >Comunidad Indigena</label>
                                    <?php
                                       
                                         $reg=new Raza();                                                   
                                        $r=$reg->leerraza();                                       
                                     ?> 
                                    <select class="form-control" name="raza">
                                         <option value="0">No Aplica</option>
                                        <?php  for($i=0;$i<sizeof($r);$i++){  ?>                                       
                                           <option class="" value="<?php  echo $r[$i]['id_raza'] ?>"><?php echo strtoupper($r[$i]['raza']) ?></option>                                        
                                        <?php } ?>                                                                                
                                    </select>                                    
                                </div>
                            </div>
                            
                            
                            <div class="col-lg-6">
                                       
                                <div class="form-group">
                                    <label class="form-control-label letra-blanca" >Motivo de Visita</label>
                                    <?php
                                        
                                        $reg=new MotVisita();
                                       $r=$reg->leermotivo();                                       
                                     ?> 
                                    <select class="form-control" name="motvis">                                        
                                        <?php  for($i=0;$i<sizeof( $r);$i++){  ?>                                       
                                           <option class="" value="<?php echo  $r[$i]['id_mot'] ?>"><?php echo  strtoupper($r[$i]['MotVisita']) ?></option>                                        
                                        <?php } ?>                                                                                
                                    </select>                                    
                                </div>
                            </div>
                            
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label letra-blanca" >Misiones</label>
                                    <?php
                                        
                                        $reg=new Mision();
                                       $r=$reg->leermision();                                       
                                     ?> 
                                    <select class="form-control" name="mision">                                        
                                        <?php  for($i=0;$i<sizeof( $r);$i++){  ?>                                       
                                           <option class="" value="<?php echo  $r[$i]['id_mision'] ?>"><?php echo  strtoupper($r[$i]['mision']) ?></option>                                        
                                        <?php } ?>                                                                                
                                    </select>  
                                </div>
                                
                            </div>
                            
                        </div>

                     
                            
                            <div class="col-lg-8 col-lg-offset-2">
                                
                              <br> 
                          <input type="hidden" name="tipvis" value="0">
                            <input type="submit" name="accion" class="btn btn-success"  value="REGISTRAR" />
                            <button class="btn btn-danger">CANCELAR</button>
                            <br>
                             <br>
                              <br> 
                            </div>  
                        

                    </form>
                    </div>

                <br>  <br> 
        </div>
             <br>
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