<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=deviceâwidth, initialâscale=1.0">
<link rel="shortcut icon" href="../bootstrap/images/iconoinfo.png" type="image/x-icon">
<link href="css/simple-sidebar.css" rel="stylesheet">
<title>Panel Administrativo</title>

<!--boostrap-->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/stylospropios.css" rel="stylesheet">



</head>
<body >
         

      <header class="fondoCeleste">

            <img class="img-rounded" src="../bootstrap/images/<?php echo  $_SESSION['logo_inf'] ?>" width="50">
            <a href="?url2=home" class="breadcrumb">PANEL ADMINISTRATIVO</a> 
            
            <div class="col-lg-3 pull-right">

            <img class="img-circle col-lg-offset-5 " src="../bootstrap/images/<?php echo  $_SESSION['img_user'] ?>" width="50">
            <h5 class="text-center "><?php echo strtoupper($_SESSION['nombre_user'].' '.$_SESSION['apellido_user']) ?></h5>
            </div>
        </header>

        <br>
        <br>
