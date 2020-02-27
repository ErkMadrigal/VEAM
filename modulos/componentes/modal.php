<?php if($mostrarModal):?>
<a class="text-white" href="#"data-toggle="modal" data-target="#exampleModalLong"><i class="fas fa-user-check m-2"></i>Ingresar Usr</a>
            <!-- Modal -->
<div class="modal fade" id="exampleModalLong"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title font-weight-bold h2" id="exampleModalLongTitle">Registrar Nuevo Usuario</h1>                                                
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--form-->
                <div class="container-fluid">
                <div class="alert alert-success mt-4" id="respuestaCorrecta" role="alert"></div>
                <div class="alert alert-danger" id="respuestaErronea"  role="alert"></div>
                <form class="needs-validation" novalidate id="registrar">
                    <div class="row">
                        <div class="col-6">
                            <input required type="text"
                                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                class="form-control" name="nombre" id="nombre"
                                placeholder="Nombre">
                            <div class="invalid-tooltip">
                                Por favor ingresa el nombre.
                            </div>
                        </div>
                        <div class="col-6">
                            <input required type="text"
                                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                class="form-control " name="apellido" id="apellido"
                                placeholder="Apellido">
                            <div class="invalid-tooltip">
                                Por favor ingresa el apellido.
                            </div>
                        </div>
                        <div class="col-12">
                            <input required type="text" class="form-control  mt-3"
                                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                name="correo" placeholder="Correo electrónico">
                            <div class="invalid-tooltip">
                                Por favor ingresa un correo.
                            </div>
                        </div>
                        <div class="col-12">
                            <input required type="text" class="form-control  mt-3"
                                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                                name="numero" placeholder="Número celular">
                            <div class="invalid-tooltip">
                                Por favor ingresa un telefono.
                            </div>
                        </div>
                        <div class="col-12">
                            <input required type="password" class="form-control  mt-3"
                                style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;" name="pass"
                                placeholder="password">
                            <div class="invalid-tooltip">
                                Por favor ingresa tu password.
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-raised btn-outline-dark mt-3">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>    
</div> 
<script>var raiz = "<?php echo $raizV;?>";</script>
<script src="<?php echo $raizV;?>js/registro-usuario.js"></script>

<?php endif;?>
