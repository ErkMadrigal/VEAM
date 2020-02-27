<?php include "modulos/RaizV.php"; ?>
<?php include 'class/database.php';?>
<?php include 'class/consultas.php';?>

<?php
    $claseConsultas = new consultas();
    $empresa = $claseConsultas->getEmpresa( 1 );
?>
     <?php $titulo  = "Bienvenido VEAMEX"; $mostrarMenu=true;  include 'modulos/componentes/header.php';?>
        <div class="container-fluid">
            <!--inicio de slider -->
            <div id="carouselExampleControls" class="carousel slide scrollflow -slide-top" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" style="height: 400px !important;" src="img/images.jpg"
                            alt="First slide">
                        <div class="carousel-caption d-none d-md-block bg-dark">
                            <h5>Texto libre</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" style="height: 400px !important;" src="img/mision.jpg"
                            alt="Second slide">
                        <div class="carousel-caption d-none d-md-block bg-dark">
                            <h5>Texto libre</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" style="height: 400px !important;" src="img/vision.jpeg"
                            alt="Third slide">
                        <div class="carousel-caption d-none d-md-block bg-dark">
                            <h5>Texto libre</h5>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
              <!--fin de slider -->
        </div>
       
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 scrollflow -slide-top -opacity">
                    <h1 class="m-0 p-4 text-center"><?php echo $empresa['Nombre'];?></h1>
                    <hr class="m-0">
                </div>
                <!--inicio de cards-->
                <div class="col-12 scrollflow -slide-top -opacity">
                    <div class="card mt-4" >
                        <div class="card-body p-0" >
                            <div class="row">
                                <div class="col-lg-10">
                                    <img src="img/mision.jpg" class="geometry" alt="">
                                </div>
                                <div class="col-lg-2">
                                    <h4 class="mvv text-center">Mision</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 scrollflow -slide-top -opacity">
                    <div class="card mt-4" >
                        <div class="card-body p-0" >
                            <div class="row">
                                <div class="col-lg-10">
                                    <img src="img/vision.jpeg" class="geometry" alt="">
                                </div>
                                <div class="col-lg-2">
                                    <h4 class="mvv text-center">Vision</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 scrollflow -slide-top -opacity">
                    <div class="card mt-4" >
                        <div class="card-body p-0" >
                            <div class="row">
                                <div class="col-lg-10">
                                    <img src="img/images.jpg" class="geometry" alt="">
                                </div>
                                <div class="col-lg-2">
                                    <h4 class="mvv text-center">Valores</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--fin de cards-->
            </div>
        </div>

        <br>
        <div id="accordion mt-5 scrollflow -slide-top -opacity">
            <div class="card mt-5">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <p style="font-size:1.9rem;">Vision</p>
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body h4">
                        <?php echo $empresa['Vision'];?>
                    </div>
                </div>
            </div>
            <div class="card mt-5 scrollflow -slide-top -opacity">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <p style="font-size:1.9rem;">Mision</p>
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body h4">
                        <?php echo $empresa['Mision'];?>
                    </div>
                </div>
            </div>
            <div class="card mt-5 scrollflow -slide-top -opacity">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"aria-expanded="false" aria-controls="collapseThree">
                           <p style="font-size:1.9rem;">Quienes Somos?</p>
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body h4">
                        <?php echo $empresa['QuienSomos'];?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 scrollflow -pop">
                <img src="img/empresas.jpg" style="width: 100%;" alt="">
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 scrollflow -pop">
                <p class="mt-5 letra text-dark" ><?php echo $empresa['caracteristicas1'];?></p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-xl-5 col-lg-5 col-md-12 scrollflow -pop">
                <p class="mt-5 letra text-dark"><?php echo $empresa['cualidad'];?></p>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-sm-12 scrollflow -pop"> 
                <img src="img/pre2.jpg" style="width: 100%" alt="">
            </div>
        </div>
        <center>
        <div class="row mt-5">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 scrollflow -pop">
                <div class="rombo mt-2">
                    <img src="img/empresas.jpg" style="height: 100%; width: 100%;"alt="">
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 scrollflow -pop">
                <div class="rombo mt-2" >
                    <img src="img/pre.jpg" style="height: 100%; width: 100%;"alt=""alt="">
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 scrollflow -pop">
                <div class="rombo mt-2">
                    <img src="img/pre2.jpg" style="height: 100%; width: 100%;"alt=""alt="">
                </div>
            </div>
        </div>
        
        <hr class="mt-5">
        <div class="row" style="">
            <div class="col-sm-4">
                <p class="text-info">ubicados</p>
                <p><?php echo $empresa['sucursal']?></p>
            </div>
            <div class="col-sm-4">
                <p class="text-info">telefonos</p>
                <p><?php echo $empresa['telefono']?></p>
                <p><?php echo $empresa['whats']?></p>
            </div>
            <div class="col-sm-4">
                <p class="text-info">contactanos</p>
                <p><?php echo $empresa['correoH']?></p>
                <p><?php echo $empresa['correoO']?></p>
                <p><?php echo $empresa['correoY']?></p>
            </div>
        </div>
        </center>
        <div class="alert alert-danger mt-5" role="alert">
            <?php echo (new DateTime())->format('Y-m-d');?>
        </div>
        <script src="js/eskju.jquery.scrollflow.min.js"></script>
        <?php $mostrarFooter=true; include 'modulos/componentes/footer.php'; ?>