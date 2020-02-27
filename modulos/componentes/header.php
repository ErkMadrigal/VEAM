<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo; ?></title>
    <link rel="shortcut icon" href="<?php echo $raizV;?>img/LOGOTIPO.png">
    <link rel="stylesheet" href="<?php echo $raizV;?>css/bootstrap-material-design.css">
    <link rel="stylesheet" href="<?php echo $raizV;?>css/all.css">
    <link rel="stylesheet" href="<?php echo $raizV;?>css/styles.css">
    <script src="<?php echo $raizV;?>js/jquery.min.js"></script>
    <script src="<?php echo $raizV;?>js/jquery-3.4.1.min.js"></script>

</head>
<style>
    .main_logo{
        background:<?php echo $empresa['color']?>;
    }
    .logo_small{
        color:<?php echo $empresa['color']?>;
    }
    nav a:hover{
        background:<?php echo $empresa['color']?>;
    }
    .btn_menu{
        background:<?php echo $empresa['color']?>;
    }
    .btn_menu:hover{
        background:<?php echo $empresa['color']?>;
    }
    #contenedor-carga{
        background-color:rgba(255,255,255,0.5);
        height:100%;
        width:100%;
        position:fixed;
        -webkit-transition: all 1a ease;
        -o-transition:all 1s ease;
        transition:all 1s ease;
        z-index:10000;
    }
    #carga{
        border:15px solid #ccc;
        border-top-color: <?php echo $empresa['color']?>;
        border-top-style:groove;
        height:100px;
        width:100px;
        border-radius:100%;
        position:absolute;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:auto;
        -webkit-animation:girar 1.5s linear infinite;
        -o-animation:girar 1.5s linear infinite;
        animation:girar 1.5 linear infinite;
    }
    @keyframes girar{
        from{transform:rotate(0deg);}
        to{transform:rotate(360deg);}
    }
</style>
<body>
<div id="contenedor-carga">
  <div id="carga"></div>  
</div>
<script>
    window.onload=function(){
    var contenedor=document.getElementById('contenedor-carga');
    contenedor.style.visibility='hidden';
    contenedor.style.opacity='1';
    }
</script>
<?php if ($mostrarMenu): ?>

    <div class="main_logo">
        <div class="row">
            <div class="col-md-4"><img src="<?php echo $raizV;?>/img/LOGOTIPO.png" style="width: 20rem;height: 15rem; margin-top:-1rem;"alt=""></div>
            <div class=" col-md-8">
            <center>
                    <spam class="h1"><?php echo $empresa['Nombre'];?></spam> <br> <br>
                    <spam class="h1 logo">Fabricacion y venta de Ventiladores</spam><br> <br>
                    <spam class="h4" style="margin-top:1rem;">Automotrices, tractocamiones, Generadores de Luz y Maquina Pesada</spam><br>
                    <spam class="h4">fabricacion de Nylon, Aluminio y Acero con la mas alta Tecnologia</spam>
                </center>
            </div>
        </div>    
    </div>
     <div class="nav">
        <div class="wrap">
            <div class="logo logo_small"><?php echo $empresa['NombreCorto'];?></div>
                    <nav>
                        <ul>
                            <li><a href="<?php echo $raizV;?>">Inicio</a></li>
                            <li><a href="<?php echo $raizV;?>">Nosotros</a></li>
                            <li><a href="<?php echo $raizV;?>modulos/paginas/catalogo.php">Productos</a></li>
                            <li><a href="<?php echo $raizV;?>">Cotizacion</a></li>
                            <li><a href="<?php echo $raizV;?>modulos/paginas/catalogo.php">Teoria</a></li>
                            <li><a href="<?php echo $raizV;?>">Contactos</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <main class="main">
    

    <?php  else:?> 
        <style>
            .photo{
                height: 5rem; width: 5rem;
            }
            @media (max-width: 700px) {
                .photo{
                    margin-top: -52px;
                }
                
            }
        </style>
		<div class="sidemenu border-dark" style="width: 20rem; z-index: 9999;position: fixed; border-radius: 0 3rem 3rem 0; left: -100%;">
				<nav>
                    <center>
                        <img class="mr-3 rounded-circle photo" src="<?php echo $raizV.$currentUser["Foto"];?>" alt="Generic placeholder image">
                        <p class="font-weight-bold h3 text-white"><?php echo $currentUser["Nombre"];?> <?php echo $currentUser["Apellido"];?></p>
                        <spam class="text-white"><?php echo $currentUser["Correo"];?></spam>
                    </center>
					<ul>
                          <form class="form-inline my-2 my-lg-0 mb-2">
                                <input class="form-control mr-sm-2 text-white" type="search" placeholder="Search" aria-label="Search">
                                <span  class="input-group-text" data-toggle="snackbar" data-content="buscando...!" data-html-allowed="true" data-timeout="0"><i class="fas fa-search"></i></span>
                            </form>   
						<li><a class="text-white"href="<?php echo $raizV;?>modulos/paginas/PrincipalAdmin.php"><i class="fas fa-house-damage m-2"> </i>Inicio</a></li>
						<li><a class="text-white"href="<?php echo $raizV;?>modulos/paginas/catalogo.php"><i class="fas fa-book-open m-2"></i>Catalogo</a></li>
                        <li><?php $mostrarModal=true; include 'modal.php';?></li>
						<li><a class="text-white"href="<?php echo $raizV;?>modulos/paginas/ajus.php"><i class="fas fa-cogs m-2"></i>Ajustes</a></li>                        
						<li><a class="text-white"href="<?php echo $raizV;?>modulos/php/cerrar-sesion.php"><i class="fas fa-window-close m-2"></i>Cerrar sesion</a></li>
                    </ul>
				</nav>
        </div>
        <?php if($mostrarBnt):?> 
            <style>
                .boton{
                    z-index:99999;left: -90px;top: 530px;background: rgb(1, 71, 222)!important;color:#fff!important; position:fixed;
                }
                @media (max-width: 700px) {
                    .photo{
                        margin-top: -52px;
                    }
                    .boton {
                        z-index:99999;left: 230px;top: 20px;background: rgb(1, 71, 222)!important;color:#fff!important; position:fixed;
                    }
                }
            </style>
                <div class="toggle btn-men ui-widget-content border-dark boton" id="draggable">
                    <i class="fas fa-ellipsis-v"></i>
                </div>
        <?php endif;?>
		<div class="contenedor">
    <main>
        
            
<?php endif; ?>
