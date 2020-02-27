<?php 
    include '../RaizV.php'; 
    include '../../class/database.php';
    include '../../class/consultas.php';
?>
<?php
       $claseConsultas = new consultas();
       $empresa = $claseConsultas->getEmpresa( 1 );
?>
     <?php $titulo  = "Informacion "; $mostrarMenu=true; include '../componentes/header.php';?>

        

     <?php $mostrarFooter=true; include '../componentes/footer.php'; ?>
 
