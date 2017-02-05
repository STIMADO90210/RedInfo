  <section>
        <div class="container fondoCeleste">
            <div class="row">
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
                    <h4 href="?url=blogdet&id=<?php echo $r[$j]['id_art'] ?>" class="text-white text-lg-center"><?= $r[0]['titulo_art'] ?></h4>
                    <br>
                    <img class="img-thumbnail" src="assets/images/<?= $r[0]['img_art'] ?>">
                    <br>
                </div>

            </div>
            <div class="clearflix"></div>
            <br>

                  <div class="jumbotron">

                      <h1 class="">Estadisticas</h1>
                      <br>

                        <?php
                          $reg=new visitas();
                          $r=$reg->contvisita();
                         ?>


                      <div class="container">
                    <div class="fondoGris col-lg-3">
                        <br>
                        <h4 class="text-white text-lg-center">Total Visitantes</h4>
                        <br>
                        <h1 class="text-lg-center"> <?php echo $r[0]['COUNT(*)'] ?></h1>
                       <br>
                    </div>
                    <div class="fondoRojo col-lg-3">
                        <br>
                       <h4 class="text-white text-lg-center">Nuevos Visitantes</h4>
                       <br>
                        <h1 class="text-lg-center">12</h1>
                       <br>
                    </div>
                          <div class="fondoCeleste col-lg-3">
                        <br>
                       <h4 class="text-white text-lg-center">Etnias / Discap</h4>
                       <br>
                       <h1 class="text-lg-center"> 12   /  16</h1>
                       <br>
                    </div>
                        <div class="fondoVerde col-lg-3">
                        <br>
                       <h4 class="text-white text-lg-center">visitas en misiones</h4>
                       <br>
                       <h1 class="text-lg-center"> 46</h1>
                       <br>
                    </div>
                      </div>

                     <br> <br>
                  </div>

                <br>  <br>  <br>
                <ul class="nav nav-pills" role="tablist">
                    <li role="presentation" class="active"><a href="#">Home <span class="badge">42</span></a></li>
                    <li role="presentation"><a href="#">Profile</a></li>
                    <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
              </ul>
        </div>

    </section>
