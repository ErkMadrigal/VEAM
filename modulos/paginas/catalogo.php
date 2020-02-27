<?php 
    include '../RaizV.php'; 
    include '../../class/database.php';
    include '../../class/consultas.php';
?>
<?php
    $claseConsultas = new consultas();

    $empresa = $claseConsultas->getEmpresa( 1 );
?>
     <?php $titulo  = "Catalogo "; $mostrarMenu=true; include '../componentes/header.php';?>
     <link rel="stylesheet" href="<?php echo $raizV;?>css/jquery-ui.css">
			<div class="row" id="tabs">
                    <div class="col-12">
                         <ul>
                              <li><a href="#tabs-1">categoria 1</a></li>
                              <li><a href="#tabs-2">categoria 2</a></li>
                              <li><a href="#tabs-3">categoria 3</a></li>
                              <li><a href="#tabs-3">categoria 4</a></li>
                         </ul>
                    </div>
				<div id="tabs-1">
                         <div class="row">
                              <?php
                                   $sql = "SELECT * FROM producto WHERE categoria=1 ORDER BY IdProducto DESC";
                                   $claseDataBase = new database();
                                   $productos = $claseDataBase->obtenerConexion()->query($sql);
                                   $productos = $productos->fetchAll();
                              ?>
                                   <?php foreach($productos as $producto):?>
                                   <div class="col-lg-4 col-md-6 col-sm-12 mt-5" >
                                        <a href="<?php echo $raizV."modulos/paginas/producto.php?idProd=".$producto['IdProducto'];?>" class="ruteProd">
                                             <div class="card cardHover" >
                                                  <img class="card-img-top"style="height:15rem;" src="<?php echo $raizV.$producto['Foto'];?>" alt="Card image cap">
                                                  <div class="card-body">
                                                       <p class="letName"><?php echo $producto['Observacion'];?></p>
                                                       <spam class="subName"><?php echo $producto['Modelo'];?><br> <?php echo $producto['Aplicacion'];?></spam>
                                                  </div>
                                             </div>
                                        </a>     
                                   </div>
                              <?php endforeach;?>
                         </div>
                    </div>
				<div id="tabs-2">
                         <div class="row">
                              <?php
                                   $sql = "SELECT * FROM producto WHERE categoria=2 ORDER BY IdProducto DESC";
                                   $claseDataBase = new database();
                                   $productos = $claseDataBase->obtenerConexion()->query($sql);
                                   $productos = $productos->fetchAll();
                              ?>
                                   <?php foreach($productos as $producto):?>
                                   <div class="col-lg-4 col-md-6 col-sm-12 mt-5" >
                                        <a href="<?php echo $raizV."modulos/paginas/producto.php?idProd=".$producto['IdProducto'];?>" class="ruteProd">
                                             <div class="card cardHover" >
                                                  <img class="card-img-top"style="height:15rem;" src="<?php echo $raizV.$producto['Foto'];?>" alt="Card image cap">
                                                  <div class="card-body">
                                                       <p class="letName"><?php echo $producto['Observacion'];?></p>
                                                       <spam class="subName"><?php echo $producto['Modelo'];?><br> <?php echo $producto['Aplicacion'];?></spam>
                                                  </div>
                                             </div>
                                        </a>     
                                   </div>
                                   <?php endforeach;?>
                         </div>
                    </div>
				<div id="tabs-3">
                         <div class="row">
                         <?php
                              $sql = "SELECT * FROM producto WHERE categoria=3 ORDER BY IdProducto DESC";
                              $claseDataBase = new database();
                              $productos = $claseDataBase->obtenerConexion()->query($sql);
                              $productos = $productos->fetchAll();
                         ?>
                              <?php foreach($productos as $producto):?>
                              <div class="col-lg-4 col-md-6 col-sm-12 mt-5" >
                                   <a href="<?php echo $raizV."modulos/paginas/producto.php?idProd=".$producto['IdProducto'];?>" class="ruteProd">
                                        <div class="card cardHover" >
                                             <img class="card-img-top"style="height:15rem;" src="<?php echo $raizV.$producto['Foto'];?>" alt="Card image cap">
                                             <div class="card-body">
                                                  <p class="letName"><?php echo $producto['Observacion'];?></p>
                                                  <spam class="subName"><?php echo $producto['Modelo'];?><br> <?php echo $producto['Aplicacion'];?></spam>
                                             </div>
                                        </div>
                                   </a>     
                              </div>
                              <?php endforeach;?>
                         </div>
                    </div>
                    <div id="tabs-4">
                         <div class="row">
                              <?php
                                   $sql = "SELECT * FROM producto WHERE categoria=4 ORDER BY IdProducto DESC";
                                   $claseDataBase = new database();
                                   $productos = $claseDataBase->obtenerConexion()->query($sql);
                                   $productos = $productos->fetchAll();
                              ?>
                              <?php foreach($productos as $producto):?>
                              <div class="col-lg-4 col-md-6 col-sm-12 mt-5" >
                                   <a href="<?php echo $raizV."modulos/paginas/producto.php?idProd=".$producto['IdProducto'];?>" class="ruteProd">
                                        <div class="card cardHover" >
                                             <img class="card-img-top"style="height:15rem;" src="<?php echo $raizV.$producto['Foto'];?>" alt="Card image cap">
                                             <div class="card-body">
                                                  <p class="letName"><?php echo $producto['Observacion'];?></p>
                                                  <spam class="subName"><?php echo $producto['Modelo'];?><br> <?php echo $producto['Aplicacion'];?></spam>
                                             </div>
                                        </div>
                                   </a>     
                              </div>
                              <?php endforeach;?>
                         </div>
                    </div>
               </div>

     
     
     
     <?php $mostrarFooter=true; include '../componentes/footer.php'; ?>
     <script >
		$( "#tabs" ).tabs();
		$("#accordion").accordion();
	</script>
