<?php include '../RaizV.php'; ?>
<?php $titulo  = "Uy, algo perdido!"; $mostrarMenu = false; $mostrarBnt=false;  include '../componentes/header.php';?>
    <div class="row alert alert-warning p-0 m-0" role="alert">
        <div class="col-md-4 col-sm-12">
            <img class="mt-5 mb-5"src="<?php echo $raizV;?>img/something-lost.png" style="height: 30rem; width: 28rem;" alt="">
        </div>
        <div class="col-md-8 col-sm-12">
            <p class="h1 mt-5"style="font-size:5rem;">404</p>
            <spam class="h4 mt-2">Page not found</spam>
            <p class="h3 mt-5">The Page you are looking for doesn´t exist or another error occurrend.</p>
            <p class="h3 mt-5 mb-5">Go back, or head over to Scass tech to choose a new direction.</p>
            <a href="<?php echo $raizV;?>indexAdmin.php" class="alert-link mt-5 mb-5">Login</a>.
        </div>
    </div>
<?php $mostrarFooter=false;  include '../componentes/footer.php'; ?>