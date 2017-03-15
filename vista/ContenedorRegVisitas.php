<?php 

if(isset($_POST['idvis'])){
$idvis=$_POST['idvis'];
$motvis=$_POST['motvis'];
$fechahoy=date('Y-m-d');
$contvis=$_POST['contvisi'];

$contvis++;

$reg=new Visitas();
$r=$reg->act_visita($contvis,$idvis);

$reg=new MotVisita();
$r=$reg->regmotivo($idvis,$motvis,$fechahoy);

?>


<script>
        alert('La Visita se Registro Correctamente');
        window.location='?url=VisitasReg&idvis=<?php echo $idvis; ?>';
</script>

<?php
}

if(isset($_GET['ced'])){
    $cedula=$_GET['ced'];
    $reg=new Visitas();
    $r=$reg->buscarCed($cedula);
    $idvis=$r[0]['id_user'];
    $contvisi=$r[0]['cont_vis'];
}
?>

<section>
        <div class="container fondoCeleste">
            
            <div class="clearflix"></div>
            <br>
            <h1 class="text-center letraBlanca">Registrar Visitantes Nuevos</h1>
            <br>
                <div class="">
                    <form action="" method="post" class="form-group" name="form1" onsubmit="retirn validaDatos()" >                      
                          
                        <div class="">

                      

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label letra-blanca" >Cedula<span class="form-asterisk">*</span></label>                                   
                                    <input type="text" required="" class="form-control" name="cedula"   id="cedula" value="<?php echo $r[0]['cedula_user'] ?>">
                                    
                                </div>
                            </div>
                            
                              <div class="col-lg-8">
                                <div class="form-group">
                                   
                                    <label class="form-control-label letra-blanca" for="form1-0-name">Nombre y Apellido<span class="form-asterisk">*</span></label>
                                    <br>
                                    
                                    <input type="text" required="" class="form-control" name="nombre"  id="nombre" value="<?php echo $r[0]['nombre_user'] ?>">
                                </div>
                            </div>


                            <div class="col-lg-6">
                                      <div class="form-group">

                                            <label class="form-control-label letra-blanca"> Email</label>
                                              <br>  

                                              <input type="text" required="" class="form-control" name="email" id="nombreemail" value="<?php echo $r[0]['email_user'] ?>">


                                      </div>


                            </div>
                          




                            <div class="col-lg-6">
                                <div class="form-group">
                                   
                                    <small class="form-control-label letra-blanca">Telefono</small >
                                    
                                    <input type="text" required="" class="form-control" name="telefono" id="telefono" value="<?php echo $r[0]['telefono_user'] ?>">
                                </div>
                            </div>
                            
                          

                       
                            
                            
                          
                            
                            
                        
                            
                            
                              <div class="col-lg-12">
                                       
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
                            
                         
                            
                           

                        </div>

                     
                            
                            <div class="col-lg-8 col-lg-offset-2">
                                
                              <br> 
                              
                          <input type="hidden" name="idvis" value="<?php echo $idvis; ?>">
                          <input type="hidden" name="contvisi" value="<?php echo $contvisi; ?>">
                            <input type="submit" name="accion" class="btn btn-success"  value="GUARDAR REGISTRO VISITA">
                            <button class="btn btn-danger">CANCELAR</button>
                            <br>
                             <br>
                              <br> 
                            </div>  
                        

                    </form>
                    </div>

                <br>  <br>  <br>
        </div>

    </section>

