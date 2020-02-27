<?php 
        $sql = "SELECT * FROM usuarios ORDER BY IdUsr DESC";
        $response  = null;
        $claseConexion = new database();
        $stmt = $claseConexion->obtenerConexion()->query($sql);
        $datos = $stmt->fetchAll();
        $cont = 1;
        ?> 
        <div class="row">
            <?php foreach($datos as $dato):?>
              <div class="col-lg-4 col-md-6 col-sm-12 mt-5" >
                <div class="card cardHover" >
                <div class="row ml-0"  style="background: #2196f3;color:#fff;width: 100%;">
                    <div class="col-6">
                      <img class="card-img-top rounded-circle"style="height:10rem;" src="<?php echo $raizV.$dato['Foto'];?>" alt="Card image cap">
                    </div>
                    <div class="col-6">
                      <p class="letName mt-5"><?php echo $dato['Nombre'];?></p>
                    </div>
                    <p class="letName"><?php echo $dato['Apellido'];?></p>
                </div>
                    <div class="card-body mt-0">
                        <spam class="subName"><?php echo $dato['Correo'];?><br> <?php echo $dato['Telefono'];?></spam>                        
                        <select class="custom-select" style="width: 10rem;" id="select<?php echo $dato['IdUsr'];?>"  onchange="cambiarEstatus(this.value,<?php echo $dato['IdUsr']?>)">
                            <option value="1" <?php echo ($dato['Estatus'] == 1) ? 'selected' : ''; ?> >Activo</option>
                            <option value="0" <?php echo ($dato['Estatus'] == 0) ? 'selected' : '';  ?>>Desactivo</option>
                        </select> 
                    </div>
                </div>
              </div>
        <?php endforeach;?>
      </div>
<script>
var url = "<?php echo $raizV;?>";
    const cambiarEstatus = (Estatus,idUsuario) => {
        let dataForm = new FormData();
        dataForm.append('idUsuario',idUsuario);
        dataForm.append('Estatus',Estatus);
        fetch(url+"class/cambiarEstatus.php",{
            method : "POST",
            body : dataForm
        })
        .then((resp)=>resp.json())
        .then((data)=>{
            if(data.estado === 'ok'){
                location.reload();
            }   else{
                console.log(data)
            }
        })
    }
</script>