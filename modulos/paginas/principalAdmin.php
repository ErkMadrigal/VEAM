<?php 
    include '../RaizV.php'; 
    include '../../class/database.php';
    include '../../class/consultas.php';
?>
<?php session_start(); ?>
    <?php if(isset($_SESSION["uid"])): ?>
        <?php
            $claseConsultas = new consultas();
            $currentUser = $claseConsultas->getDataUser($_SESSION["uid"]);
            $empresa = $claseConsultas->getEmpresa( 1 );
        ?>
        <?php $titulo  = "Bienvenido admin ".$currentUser["Nombre"] ; $mostrarMenu = false; $mostrarBnt=true;  include '../componentes/header.php';?>
     <link rel="stylesheet" href="<?php echo $raizV;?>css/jquery-ui.css">
     <div id="tabs" class="col-sm-12" class="mt-5">
        <ul>
            <li><a href="#tabs-2">Lista Productos</a></li>
            <li><a href="#tabs-3">Usuarios</a></li>
            <li><a href="#tabs-5">Producto</a></li>

        </ul>
        
        <div id="tabs-2">
            <?php include '../componentes/todosProductos.php';?>
        </div>
        <div id="tabs-3">
            <?php include '../componentes/usr.php';?>
        </div>
        <div id="tabs-5">
            <?php include '../componentes/modificar.php';?>
        </div>
    </div>
    <?php $mostrarFooter=false; include '../componentes/footer.php';?>
    <script>
        $( function() {
            var tabs = $( "#tabs" ).tabs();
            tabs.find( ".ui-tabs-nav" ).sortable({
            axis: "x",
            stop: function() {
                tabs.tabs( "refresh" );
            }
            });
        } );
    </script>

    <?php else:?>
            <?php include "error-404.php";?>
    <?php endif;?>