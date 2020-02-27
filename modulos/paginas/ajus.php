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
        ?>
     <?php $titulo  = "Ajustes"; $mostrarMenu=false;  $mostrarBnt=true;  include '../componentes/header.php';?>
        <link rel="stylesheet" href="<?php echo $raizV;?>css/jquery-ui.css">

        <?php include '../componentes/ajustes.php';?>
        <script>
        $( function() {
          $( "#accordion" ).accordion({
            heightStyle: "content"
          });
        } );
      </script>
        <?php $mostrarFooter=false; include '../componentes/footer.php'; ?>
     
  <?php else:?>
    <?php include "error-404.php";?>
  <?php endif;?>