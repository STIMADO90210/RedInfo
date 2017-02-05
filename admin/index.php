<?php include '../config.php'; ?>


    <?php include 'default/cabeza.php'; ?>



       <div class="container-fluid">
           <?php


           include 'default/lateralmenu.php';


           $url2=$_GET['url2'];

         
           include 'contenidos/conte'.$url2.'.php';

           ?>





        </div>
         <br>
                 <br><br>
                 <br>


                 <?php include 'default/rodapie.php'; ?>
