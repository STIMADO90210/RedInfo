<?php
include_once 'config.php';
include_once 'public/cabecera.php';

?>
<script>
function AutoRefresh( t ) {
setTimeout("location.reload(true);", t);
}
</script>
  <body onload="JavaScript:AutoRefresh(5000);">
<?php
        $nro=array();


        $cont=1;
        for($i=1;$i<6;$i++){
          for($j=1;$j<16;$j++){
          $nro[$i][$j]=$cont;

          $cont++;
        }
        }

$nrof=rand(1, 75);
$c=0;

?>
<div class="container  ">
<div class='col-lg-5 fondonegro'>
<table class='table table-border text-lg-center'>
<tr class="text-white">
<td><h3>B</h3><td>
<td><h3>I</h3><td>
<td><h3>N</h3><td>
<td><h3>G</h3><td>
<td><h3>O</h3><td>
</tr>
<?php
        for($i=1;$i<16;$i++){
            echo "<tr>";
            for($j=1;$j<6;$j++){
                  $c++;
                  if($nrof==$nro[$j][$i]){
                    echo "<td class='fondoGris  text-white text-center'>". $nro[$j][$i] ."<td>";
                  }else{
                  echo "<td class='fondoCeleste text-center'>". $nro[$j][$i] ."<td>";
                }
                        if($c==5){
                          echo "<br>";
                          $c=0;

                        }
          }
            echo "</tr>";
        }
        ?>
        </table>
      </div>




    </div>
    <div class="clearflix"></div>



<br><br><br><br><br>


<?php


 include_once 'public/stilosJs.php';
 ?>


  </body>
</html>
