<div class="row">
    <?php
        $sql = "SELECT * FROM producto ORDER BY IdProducto DESC";
        $claseDataBase = new database();
        $productos = $claseDataBase->obtenerConexion()->query($sql);
        $productos = $productos->fetchAll();
    ?>
    <?php foreach($productos as $producto):?>
    <div class="col-lg-4 col-md-6 col-sm-12 mt-5" >
        <a href="<?php echo $raizV;?>modulos/paginas/producto.php" class="ruteProd">
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