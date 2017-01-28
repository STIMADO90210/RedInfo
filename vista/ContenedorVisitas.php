

<section>

        <div class="container fondoCeleste">
            <?php
                    $reg=new Infocentro();
                    $r=$reg->leerInfo_id($_GET['id'])
             ?>
            <div class="row">
                    <h1 class="text-lg-ce
                <div class="col-lg-12">
                    <br>
                    <br>

                    <h1 class="text-lg-center text-white">Visitas</h1>
                   
                    
                    <div class="container ">
                        <div class="col-lg-8 col-lg-offset-2">
                                <table class="table">
                                    <tr class="active text-white">
                                        <td>Id</td>
                                        <td>Nombre</td>
                                        <td>Infocentro</td>
                                        <td>Fecha Inscripcion</td>
                                        <td>Status</td>
                                    </tr>
                                    <?php 
                                    $reg= new Visitas();
                                    $r=$reg->leervisita();

                                    for($i=0;$i<count($r);$i++)
                                    { 
                                    ?>
                                     <tr>
                                        <td>Id</td>
                                        <td>Nombre</td>
                                        <td>Infocentro</td>
                                        <td>Fecha Inscripcion</td>
                                        <td>Status</td>
                                    </tr>
                                    <?php } ?>
                                </table>
                        </div>

                    <br><br>
                    <br><br>

                    </div>
                    <br>
                    <br>
                </div>



            </div>

        </div>

    </section>
