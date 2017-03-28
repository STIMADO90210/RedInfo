<?php
            
        if(isset($_POST['email'])and$_POST['email']!=''){
            
        $id=$_POST['idinf'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
            $reg=new Users();
            $r=$reg->login($email, $pass, $id);
            
           if(count($r)>0){
         $_SESSION['id_user']=$r[0]['id_user'];
         $_SESSION['nombre_user']=$r[0]['nombre_user'];
         $_SESSION['apellido_user']=$r[0]['apellido_user'];
          $_SESSION['img_user']=$r[0]['img_user'];
         $_SESSION['email_user']=$r[0]['email_user'];
         $_SESSION['nivel_user']=$r[0]['nivel_user'];
         $_SESSION['id_inf']=$r[0]['id_inf'];

          $reg=new Infocentro();
          $r=$reg->leerInfo_id($id);
          
          if(count($r)>0){
           $_SESSION['logo_inf'] = $r[0]['logo_inf'];
           $_SESSION['nombre_inf'] = $r[0]['nombre_inf'];

         }

           ?>
                 <script>
                     alert('Bienvenido al sistema');
                     window.location='?url=Inicio';
                 </script>
         <?php
         }else{
           ?>
                 <script>
                     alert('Usuario o Clave Son Incorrecto ' );

                 </script>
         <?php
         }


          //  window.location='?url=inicio';
    }
?>

        <section>
            <br>
                 <br>
                
            <div class="container">
                <div class="fondoCeleste">
                    <div class="container">
                        <?php
                    $reg=new Infocentro();
                    $r=$reg->leerInfo_id($_GET['id'])
             ?>
           
             

                    <h1 class="text-center letraBlanca">Infocentro <?php echo strtoupper($r[0]['nombre_inf']) ?></h1>
                    <?php
                        $adm=new Users();
                        $a=$adm->buscarinfo($_GET['id']);
                        if(count($a)==0){
                          ?>
                                <script>
                                    alert('Infocentro no Tiene Administador Asignado');
                                    window.location='?url=Inicio';
                                </script>
                        <?php
                        }
                    ?>
                    <h3 class="letraBlanca">Administrador : <?php echo strtoupper($a[0]['nombre_user'].'  '. $a[0]['apellido_user']) ?></h3>
                            <div class="col-lg-6 col-lg-offset-2 fondoNegro ">
                                <br>
                                    <form class="" method="post" action="" name="login" id="login">
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control"  placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="pass" class="form-control"  placeholder="Password">
                                        </div>
                                        <input type="submit" class="btn btn-primary col-lg-offset-1" name="Enviar" value="Iniciar Session">
                                        <input type="hidden" name="idinf" value="<?php echo $_GET['id'] ?>">
                                     </form>
                                <br><br>
                             </div>
                    </div>
                    <br>
                 <br>
                 <br>
                 <br>
                </div>
                
            </div>
         </section>
                 <br>
                 <br>
                 <br>
                 <br>