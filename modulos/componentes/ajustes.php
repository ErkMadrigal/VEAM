 
<div id="accordion">
<?php
    $claseConsultas = new consultas();
    $empresa = $claseConsultas->getEmpresa(1);
?>
    <!--Foto-->
  <h3>Modificar Imagen de Fondo</h3>
  <div>
    <div class="imagen-portada" id="coverPortadaImage" style="height: 19rem; background-image: url('<?php echo $raizV.$empresa['Portada'];?>');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;">
        
        <label class="btn btn-primary cargar-imagen-portada" >
            <i class="fas fa-camera"></i>
            <input type="file"  id="uploadImage" class="d-none" >
        </label>
    </div>
  </div>
    <!--EndFoto-->
    
    <!--InformacionEmpresarial-->
    <h3>Modificar datos de la empresa</h3>
    <div>
        <div class="alert alert-success mt-4" id="respuestaCorrectaEmp" role="alert"></div>
        <div class="alert alert-danger" id="respuestaErroneaEmp"  role="alert"></div>
        <form class="needs-validationEm" novalidate id="registrarEm">
                <div class="row">
                    <div class="col-12">
                    <center>
                        <textarea required type="text"
                            style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                            class="form-control" name="nombreE" id="nombreE"
                            placeholder="Por favor ingresa el nombre de la empresa"><?php echo $empresa['Nombre'];?></textarea>
                        <div class="invalid-tooltip">
                            Por favor ingresa el nombre de la empresa.
                        </div>
                    </center>    
                    </div>
                    <div class="col-12">
                        <textarea required type="text" class="form-control  mt-3"
                            style="height: 3rem; background: white;border-radius: 3px; border: 1px solid #bdc7d8;" name="nombreCorto"
                            placeholder="Nombre corto."><?php echo $empresa['NombreCorto'];?></textarea>
                        <div class="invalid-tooltip">
                            Nombre corto
                        </div>
                    </div>
                    <div class="col-12">
                        <textarea required type="text"
                            style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                            class="form-control mt-3" name="UbicacionE" id="UbicacionE"
                            placeholder="Ubicacion."><?php echo $empresa['sucursal'];?></textarea>
                        <div class="invalid-tooltip">
                            Ubicacion.
                        </div>
                    </div>
                    <div class="col-12">
                        <input required type="text" class="form-control  mt-3"
                            style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                            name="CorreoEH" placeholder="correo electrónico hotmail"value="<?php echo $empresa['correoH'];?>">
                        <div class="invalid-tooltip">
                            Correo hotmail.
                        </div>
                    </div>
                    <div class="col-12">
                        <input required type="text" class="form-control  mt-3"
                            style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                            name="CorreoEO" placeholder="correo electrónico outlook"value="<?php echo $empresa['correoO'];?>">
                        <div class="invalid-tooltip">
                            Correo outlook.
                        </div>
                    </div>
                    <div class="col-12">
                        <input required type="text" class="form-control  mt-3"
                            style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                            name="CorreoEY" placeholder="correo electrónico yahoo" value="<?php echo $empresa['correoY'];?>">
                        <div class="invalid-tooltip">
                            Correo yahoo.
                        </div>
                    </div>
                    <div class="col-12">
                        <input required type="text" class="form-control  mt-3"
                            style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;" name="telefonoE"
                            placeholder="telefono."value="<?php echo $empresa['telefono'];?>">
                        <div class="invalid-tooltip">
                            telefonos.
                        </div>
                    </div>
                    <div class="col-12">
                        <input required type="text" class="form-control  mt-3"
                            style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;" name="telefonoECel"
                            placeholder="telefono Celular."value="<?php echo $empresa['whats'];?>">
                        <div class="invalid-tooltip">
                            telefonos Celular.
                        </div>
                    </div>
                    <div class="col-12">
                        <textarea required type="text" class="form-control  mt-3"
                            style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;" name="caracteristicas1"
                            placeholder="caracteristica."><?php echo $empresa['caracteristicas1'];?></textarea>
                        <div class="invalid-tooltip">
                            Caracteristica.
                        </div>
                    </div>
                    <div class="col-12">
                        <textarea required type="text" class="form-control  mt-3"
                            style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;" name="cualidad"
                            placeholder="cualidad."><?php echo $empresa['cualidad'];?></textarea>
                        <div class="invalid-tooltip">
                            Cualidad.
                        </div>
                    </div>
                    <div class="col-12">
                        <input required type="color" class="form-control  mt-3"
                            style="height: 3rem; background: white;border-radius: 3px; border: 1px solid #bdc7d8;" name="color"
                            placeholder="color."value="<?php echo $empresa['color'];?>">
                        <div class="invalid-tooltip">
                            Color.
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <button class="btn btn-raised btn-outline-dark mt-3">Modificar</button>
                    </div>
                </div>
        </form>
    </div>
    <!--EndInformacionEmpresarial-->    
    <!--informacion-->
    <h3>Modificar Datos Personales</h3>
    <div>
        <div class="alert alert-success mt-4" id="respuestaCorrectaU" role="alert"></div>
        <div class="alert alert-danger" id="respuestaErroneaU"  role="alert"></div>
        <form class="modificarDP" novalidate id="modificarDP">
                <div class="row">
                    <div class="col-12">
                        <input required type="text"
                            style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                            class="form-control" name="nombreP" id="nombreP"
                            placeholder="Nombre" value="<?php echo $currentUser['Nombre'];?>">
                        <div class="invalid-tooltip">
                            Por favor ingresa el nombre.
                        </div>
                    </div>
                    <div class="col-12">
                        <input required type="text"
                            style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                            class="form-control mt-3" name="apellidoP" id="apellidoP"
                            placeholder="Apellido" value="<?php echo $currentUser['Apellido'];?>">
                        <div class="invalid-tooltip">
                            Por favor ingresa el apellido.
                        </div>
                    </div>
                    <div class="col-12">
                        <input required type="text" class="form-control  mt-3"
                            style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                            name="correoP" placeholder="correo electrónico" value="<?php echo $currentUser['Correo'];?>">
                        <div class="invalid-tooltip">
                            Por favor ingresa un correo.
                        </div>
                    </div>
                    <div class="col-12">
                        <input required type="text" class="form-control  mt-3"
                            style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                            name="numeroP" placeholder="Número celular" value="<?php echo $currentUser['Telefono'];?>">
                        <div class="invalid-tooltip">
                            Por favor ingresa un telefono.
                        </div>
                    </div>
                    <div class="col-12">
                        <input required type="password" class="form-control  mt-3"
                            style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;" name="contraseniaP"
                            placeholder="contrasenia" value="<?php echo $currentUser['Contrasenia'];?>">
                        <div class="invalid-tooltip">
                            Por favor ingresa tu password.
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-raised btn-outline-dark mt-3">Modificar</button>
                    </div>
                </div>
        </form>
    </div>
    <!--EndInformacion-->
</div>
<script src="<?php echo $raizV;?>js/upDateUsr.js"></script>
<script src="<?php echo $raizV;?>js/upDateEmp.js"></script>


<script >
    var url = "<?php echo $raizV;?>";
    $('#uploadImage').change(function () {
        if( this.files[0] !== undefined){
            dataForm = new FormData();
            dataForm.append('imagen',this.files[0])
            fetch(url+'class/upload-image.php',{
                method : "POST",
                body : dataForm
            })
            .then((response)=>response.json())
            .then((info)=>console.log(info))
            readURL(this);
        }else{
            alert('Imgresa una imagen');
        }
        
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                console.log()
                $('#coverPortadaImage').css('background-image', 'url('+e.target.result+')');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
