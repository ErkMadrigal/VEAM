<?php 
    include '../RaizV.php'; 
    include '../../class/database.php';
    include '../../class/consultas.php';
?>
<?php
    $idProd = $_GET["idProd"];
    $claseConsultas = new consultas();
    $empresa = $claseConsultas->getEmpresa( 1 );
    $productos=$claseConsultas->getProducto($idProd);
?>
    
     <?php $titulo  = "Catalogo "; $mostrarMenu=true; include '../componentes/header.php';?>
    <link rel="stylesheet" href="<?php echo $raizV;?>css/move.css">
    <link rel="stylesheet" href="<?php echo $raizV;?>css/jquery-ui.css">
    <h1 class="m-0 p-4 text-center"><?php echo $productos['Modelo'];?> <?php echo $productos['NoDeParte'];?></h1>
    <hr class="m-0">
<center>
    <div class="row mt-5">
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
            <div class="cardM mb-5" >
                <!--<div class="card-header letName">Header</div>
                <div class="card-body">-->
                <img  id="#imagenRotate" src="<?php echo $raizV.$productos['Foto']?>" style="width:100%;"alt="">
                <!--<img  id="imagenRotate" src="<?php echo $raizV;?>img/Metal-NE-VM-266-FREIGHTLINER_MG_1669.JPG.jpg" style="width:100%;"alt="">-->
                <!-- <h5 class="card-title mt-2 subName">Dark card title</h5>
                    <p class="card-text sub mt-0 p-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>-->
            </div>
        </div> 
        <!--imagen rotando-->
        <style>
            #imagenRotate{
                -webkit-animation:girar 3.5s linear infinite;
                -o-animation:girar 3.5s linear infinite;
                animation:girar 3.5 linear infinite;
            }
            @keyframes girar{
                from{transform:rotate(0deg);}
                to{transform:rotate(360deg);}
            }
        </style>
        <!--imagen rotando-->
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
            <div class="row mt-0 p-0">
                <?php 
                    $modelo=$productos['Modelo'];
                    $categoria=$productos['categoria'];
                
                   //$sql= "SELECT * FROM producto WHERE Modelo='$modelo', AND categoria='$categoria' ORDER BY NoDeParte DESC";
                   $sql = "SELECT * FROM producto WHERE Modelo='$modelo' AND categoria='$categoria'";
                   //$sql="SELECT * FROM producto";
                    $claseDataBase = new database();
                    $products = $claseDataBase->obtenerConexion()->query($sql);
                    $products = $products->fetchAll();
                ?>
                
                <?php foreach($products as $product):?>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <a href="<?php echo $raizV."modulos/paginas/producto.php?idProd=".$product['IdProducto'];?>">
                            <img  src="<?php echo $raizV.$product['Foto'];?>" style="width: 100%;" alt="">
                        </a> 
                    </div>
                <?php endforeach;?>
                
            </div>
        </div>
    </div>
</center>
<?php 

    $sql = "SELECT * FROM producto WHERE Modelo='$modelo'";
    $claseDataBase = new database();
    $mostrarProds = $claseDataBase->obtenerConexion()->query($sql);
    $mostrarProds = $mostrarProds->fetchAll();
?>
        <div class="row" id="tabs">
            <div class="col-12">
				<ul>
					<li><a href="#tabs-1">Modelo</a></li>
					<li><a href="#tabs-2">No. de Parte</a></li>
                    <li><a href="#tabs-3">Aplicacion</a></li>
                    <li><a href="#tabs-4">Diam</a></li>
					<li><a href="#tabs-5">aspas</a></li>
                    <li><a href="#tabs-6">Pilot</a></li>
                    <li><a href="#tabs-7">Rot</a></li>
					<li><a href="#tabs-8">Material</a></li>
                    <li><a href="#tabs-9">Observaciones</a></li>
                </ul>
            </div>  
                    <style>
                        #feedback { font-size: 1.4em; }
                        .selectable .ui-selecting { background: #019CDE; }
                        .selectable .ui-selected { background: #019CDE; color: white; }
                        .selectable { list-style-type: none; margin: 0; padding: 0; width: 100%; }
                        .selectable li { margin: 3px; padding: 0.4em; font-size: 1rem; height: 2rem; }
                        .iu-widget-content{background:#019CDE; color:#fff;}
                    </style>     
				<div class="w-100" id="tabs-1">
                    <ol id="modelo" class="selectable">
                        <?php foreach($mostrarProds as $mostrarProd):?>
                            <a href="<?php echo $raizV."modulos/paginas/producto.php?idProd=".$mostrarProd['IdProducto'];?>">
                                <li class="ui-widget-content"><?php echo $mostrarProd['Modelo'];?></li>
                            </a>
                        <?php endforeach?>
                    </ol>
                </div>
				<div class="w-100"  id="tabs-2">
                    <ol id="NodeParte" class="selectable">
                        <?php foreach($mostrarProds as $mostrarProd):?>
                            <a href="<?php echo $raizV."modulos/paginas/producto.php?idProd=".$mostrarProd['IdProducto'];?>">
                                <li class="ui-widget-content"><?php echo $mostrarProd['NoDeParte'];?></li>
                            </a>
                        <?php endforeach?>
                    </ol>
				</div>
				<div class="w-100"  id="tabs-3">
                    <ol id="aplicacion" class="selectable">
                        <?php foreach($mostrarProds as $mostrarProd):?>
                            <a href="<?php echo $raizV."modulos/paginas/producto.php?idProd=".$mostrarProd['IdProducto'];?>">
                                <li class="ui-widget-content"><?php echo $mostrarProd['Aplicacion'];?></li>
                            </a>
                        <?php endforeach?>
                    </ol>
                 </div>
                 <div class="w-100"  id="tabs-4">
                    <ol id="diametro" class="selectable">
                        <?php foreach($mostrarProds as $mostrarProd):?>
                            <a href="<?php echo $raizV."modulos/paginas/producto.php?idProd=".$mostrarProd['IdProducto'];?>">
                                <li class="ui-widget-content"><?php echo $mostrarProd['Diametro'];?></li>
                            </a>
                        <?php endforeach?>
                    </ol> 
                </div>
				<div class="w-100"  id="tabs-5">
                    <ol id="aspas" class="selectable">
                        <?php foreach($mostrarProds as $mostrarProd):?>
                            <a href="<?php echo $raizV."modulos/paginas/producto.php?idProd=".$mostrarProd['IdProducto'];?>">
                                <li class="ui-widget-content"><?php echo $mostrarProd['Aspas'];?></li>
                            </a>
                        <?php endforeach?>
                    </ol>
				</div>
				<div class="w-100"  id="tabs-6">
                    <ol id="centro" class="selectable">
                        <?php foreach($mostrarProds as $mostrarProd):?>
                            <a href="<?php echo $raizV."modulos/paginas/producto.php?idProd=".$mostrarProd['IdProducto'];?>">
                                <li class="ui-widget-content"><?php echo $mostrarProd['Centro'];?></li>
                            </a>
                        <?php endforeach?>
                    </ol>
                 </div>
                 <div class="w-100"  id="tabs-7">
                    <ol id="rot" class="selectable">
                        <?php foreach($mostrarProds as $mostrarProd):?>
                            <a href="<?php echo $raizV."modulos/paginas/producto.php?idProd=".$mostrarProd['IdProducto'];?>">
                                <li class="ui-widget-content"><?php echo $mostrarProd['Rot'];?></li>
                            </a>
                        <?php endforeach?>
                    </ol>
                </div>
				<div class="w-100"  id="tabs-8">
                    <ol id="material" class="selectable">
                        <?php foreach($mostrarProds as $mostrarProd):?>
                            <a href="<?php echo $raizV."modulos/paginas/producto.php?idProd=".$mostrarProd['IdProducto'];?>">
                                <li class="ui-widget-content"><?php echo $mostrarProd['Material'];?></li>
                            </a>
                        <?php endforeach?>
                    </ol>
				</div>
				<div class="w-100"  id="tabs-9">
                    <ol id="observacion" class="selectable">
                        <?php foreach($mostrarProds as $mostrarProd):?>
                                <a href="<?php echo $raizV."modulos/paginas/producto.php?idProd=".$mostrarProd['IdProducto'];?>">
                                    <li class="ui-widget-content"><?php echo $mostrarProd['Observacion'];?></li>
                                </a>
                        <?php endforeach?>
                    </ol>
                </div>
            </div>  
        </div>
        <script src="<?php echo $raizV;?>js/move.js"></script>
        <script>
                /*Selectable*/
            $( function(){ $( "#modelo" ).selectable();} );
            $( function(){ $( "#NodeParte" ).selectable();} );
            $( function(){ $( "#aplicacion" ).selectable();} );
            $( function(){ $( "#diametro" ).selectable();} );
            $( function(){ $( "#aspas" ).selectable();} );
            $( function(){ $( "#centro" ).selectable();} );
            $( function(){ $( "#rot" ).selectable();} );
            $( function(){ $( "#material" ).selectable();} );
            $( function(){ $( "#observacion" ).selectable();} );
                /*End Selectable*/
            /*seleccion  de tablas moviendo el cursor*/
            $( function() {$( "#tabs" ).tabs({event: "mouseover"});} );
            /*End seleccion  de tablas moviendo el cursor*/

        </script>
     <?php $mostrarFooter=true; include '../componentes/footer.php'; ?>
