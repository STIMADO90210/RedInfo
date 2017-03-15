

<?php

$ced=$_POST['ced'];
$reg=new Visitas();
$r=$reg->buscarCed($ced);
if(isset($_POST['ced'])){  
if(count($r)==0){
    ?>
<script>
        alert('Visitante no  Registrado');
        window.location='?url=NuevaVisitas&ced=<?php echo $ced ?>';
</script>

<?php
}else{
    ?>
<script>
        
        alert('Visitante Ya Registrado');
        window.location='?url=RegVisitas&ced=<?php echo $ced ?>';
</script>

<?php
}
}
?>

<section>
        <div class="container fondoCeleste">
            
            <div class="clearflix"></div>
            <br>
            <h1 class="text-lg-center text-white">Buscar Cedula Visitante</h1>
            <br>
                <div class="">
                    <form action="" method="post" class="form-group" name="buscarced" >                                                                                             
                            <div class="col-lg-12">
                               
                                <div class="form-group">
                                                                       
                                    <div class="col-lg-6">
                                      <label class="form-control-label letraBlanca" >Ingrese Cedula a Buscar</label>   
                                    <input type="text" required="" class="form-control" name="ced"   id="ced" value="<?php ?>">
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-success" >Buscar Cedula</button>>                                        
                                </div>
                                <br>  <br>  <br>
                            </div>                                                                                                                                      
                        

                    </form>
                    </div>

                <br>  <br>  <br>
                 
        </div>

    </section>
<br>  <br>  <br>
<br>  <br>  <br>

