  <section>
        <div class="container" >
            <div class="row"  style='background-image:url(bootstrap/images/fondo-azul-claro.jpg)'>
                <div class="col-lg-8">
                    <br>
                      <br>


                    <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="data1/images/slider0.jpg" alt="" title="" id="wows1_0"/></li>
		<li><img src="data1/images/slider1.jpg" alt="" title="" id="wows1_1"/></li>
		<li><img src="data1/images/slider2.jpg" alt="" title="" id="wows1_2"/></li>
		<li><img src="data1/images/slider3.jpg" alt="" title="" id="wows1_3"/></li>
		<li><a href="http://wowslider.com"><img src="data1/images/slider4.jpg" alt="slider" title="" id="wows1_4"/></a></li>
		<li><img src="data1/images/slider5.jpg" alt="" title="" id="wows1_5"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title=""><span><img src="data1/tooltips/slider0.jpg" alt=""/>1</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/slider1.jpg" alt=""/>2</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/slider2.jpg" alt=""/>3</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/slider3.jpg" alt=""/>4</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/slider4.jpg" alt=""/>5</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/slider5.jpg" alt=""/>6</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">bootstrap slider</a> by WOWSlider.com v8.7</div>
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->

        <br>
                    <br>
                </div>
                <?php
                		$reg=new blog();
                		$r=$reg->leerblog2();
                ?>

                <div  class="col-lg-4">
                    <br>
                    <br>
                    <h4 href="?url=blogdet&id=<?php echo $r[$j]['id_art'] ?>" class=""><strong class="text-white"><?= $r[0]['titulo_art'] ?></strong></h4>
                    <br>
                    <img class="img-thumbnail" src="bootstrap/images/<?= $r[0]['img_art'] ?>">
                    <br>
                </div>

            </div>
            <div class="clearflix"></div>
            <br>

                  <div class="col-lg-12 fondoBlanco"  >
                            <br>
                      <h3 class="text-center text-uppercase">Estadisticas De Todos Los Infocentros</h3>
                      <br>

                        <?php
                          $reg=new MotVisita();
                          $r=$reg->leermot();
                          $totalvis=  count($r);
                         ?>


                <div class="container-fluid">

                       <div class="col-lg-3    ">
                                <div class="container-fluid ">
                                    <br>
                                    <button class="btn btn-danger btn-block letraBlanca">Total Visitas   <span class="badge"><?=  $totalvis ?></span></button>
                                    <br>
                                </div>
                        </div>
                    <?php
                          $reg=new visitas();
                          $r=$reg->leervisita();
                          $total=  count($r);
                      ?>

                  <div class="col-lg-3">
                    <div class="container-fluid">
                        <br>
                          <button class="letraBlanca btn btn-success btn-block">Registrados  <span class="badge"><?=  $total ?></span></button>
                          <br>
                    </div>
                  </div>


                    <?php
                                $reg=new Visitas();
                                $r=$reg->leervisitaestaditica();
                               //$r[$i]['fecha_inscrip']

                                $nuevos=0;
                                $regulares=0;
                                for($i=0;$i<count($r);$i++){
                                $cant=contdias($r[$i]['fecha_inscrip']);
                                    if($cant<30){$nuevos++;}else{$regulares++;}
                                }
                  ?>
                    <div class="col-lg-3">
                    <div class="container-fluid">
                        <br>
                        <button class="btn btn-primary btn-block letraBlanca">Nuevas  Visitas  <span class="badge"><?=  $nuevos ?></span></button>
                        <br>
                    </div>
                  </div>



                    <div class="col-lg-3">
                    <div class="container-fluid">
                        <br>
                        <button class="btn btn-warning btn-block letraBlanca">Regulares   <span class="badge"><?=  $regulares ?></span></button>
                        <br>
                    </div>
                  </div>
                    <div class="clearflix"></div>
                </div>


                     <div class="container-fluid">
                     <div class="" >
                         <div id="canvas-holder" class="col-lg-offset-2" style="width:70%">
                             <canvas id="chart-area" width="350" height="200" />
                     </div>

  <script>
    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };

    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [
                    '<?=  $totalvis ?>',
                    '<?=  $total ?>',
                    '<?=  $nuevos ?>',
                    '<?=  $regulares ?>',

                ],
                backgroundColor: [
                    window.chartColors.red,
                    window.chartColors.green,
                    window.chartColors.blue,
                    window.chartColors.orange,

                ],
                label: 'Infocentro'
            }],
            labels: [
                "TOTAL VISITAS",
                 "VISITAS REGISTRADAS",
                  "VISITAS NUEVAS",
                   "VISITAS REGULARES",

            ]
        },
        options: {
            responsive: true,
            title:"TOTAL ESTADISTICAS DE LOS INFOCENTROS",
            visible:false
        }
    };

    window.onload = function() {
        var ctx = document.getElementById("chart-area").getContext("2d");
        window.myPie = new Chart(ctx, config);
    };



    var colorNames = Object.keys(window.chartColors);
    document.getElementById('addDataset').addEventListener('click', function() {
        var newDataset = {
            backgroundColor: [],
            data: [],
            label: 'New dataset ' + config.data.datasets.length,
        };

        for (var index = 0; index < config.data.labels.length; ++index) {
            newDataset.data.push(randomScalingFactor());

            var colorName = colorNames[index % colorNames.length];;
            var newColor = window.chartColors[colorName];
            newDataset.backgroundColor.push(newColor);
        }

        config.data.datasets.push(newDataset);
        window.myPie.update();
    });

    document.getElementById('removeDataset').addEventListener('click', function() {
        config.data.datasets.splice(0, 1);
        window.myPie.update();
    });
    </script>
                     </div>
               </div>
                     <br> <br>

                  </div>

                <br>  <br>  <br>

        </div>

    </section>
