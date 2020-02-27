<div class="alert alert-success mt-4" id="respuestaCorrectaP" role="alert"></div>
<div class="alert alert-danger" id="respuestaErroneaP"  role="alert"></div>

<form class="needs-validationP" novalidate id="registrarP">
    <div class="row">
        <div class="col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-md-12 col-sm-12 mt-3">
                            <input required type="text"
                            style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                            class="form-control" name="modelo" id="modelo"
                            placeholder="modelo">
                        <div class="invalid-tooltip">
                            Por favor ingresa el modelo.
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 mt-3">
                        <input required type="text"
                            style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                            class="form-control " name="noDeParte" id="noDeParte"
                            placeholder="No De Parte">
                        <div class="invalid-tooltip">
                            Por favor ingresa el No De Parte.
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 mt-3">
                            <input required type="text"
                            style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                            class="form-control " name="aplicacion" id="aplicacion"
                            placeholder="Aplicacion">
                        <div class="invalid-tooltip">
                            Por favor ingresa la Aplicacion.
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-3">
                        <input required type="text"
                            style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                            class="form-control " name="diametro" id="diametro"
                            placeholder="diametro">
                        <div class="invalid-tooltip">
                            Por favor ingresa el Diametro.
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-3">
                        <input required type="text"
                            style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                            class="form-control " name="aspas" id="aspas"
                            placeholder="aspas">
                        <div class="invalid-tooltip">
                            Por favor ingresa las aspas.
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-3">
                        <input required type="text"
                            style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                            class="form-control " name="centro" id="centro"
                            placeholder="centro">
                        <div class="invalid-tooltip">
                            Por favor ingresa el centro.
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-3">
                        <input required type="text"
                            style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                            class="form-control " name="rot" id="rot"
                            placeholder="rot">
                        <div class="invalid-tooltip">
                            Por favor ingresa el rot.
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-3">
                        <input required type="text"
                            style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                            class="form-control " name="material" id="material"
                            placeholder="Material">
                        <div class="invalid-tooltip">
                            Por favor ingresa el Material.
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-3">
                        <input required type="text"
                            style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
                            class="form-control " name="observacion" id="observacion"
                            placeholder="observacion">
                        <div class="invalid-tooltip">
                            Por favor ingresa la Observacion.
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mt-3">
                        <select required class="custom-select mt-3" name="categoria" id="categoria">
                            <option value="">elige la categoria</option>
                            <option value="1">1 Uno</option>
                            <option value="2">2 Dos</option>
                            <option value="3">4 Cuatro</option>
                        </select>
                        <div class="invalid-tooltip">
                            Por favor ingresa la categoria.
                        </div>
                    </div>
                </div>
                </div>
        <div class="col-md-6 col-sm-12">
            <style>img{width: 100%;height: 100%;border-radius: 1rem;}</style>
                <label class="btn btn-raised btn-outline-info mt-3 btn-file" style="text-transform: inherit;">
                    <i class="fas fa-images mr-2"></i> Foto 
                   <input type="file"  id="file" class="d-none" name="cover" required>
                </label> 
            <div class="imagen-portada" id="preview" style="height: 15rem; width: 27rem; background-image: url(<?php echo $raizV;?>img/newProdct.jpg);
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;">
               
            </div>    
        </div>
    <div class="col-md-12 col-sm-12 col-sm-12">
        <button class="btn btn-raised btn-outline-info mt-3">Insertar</button>
        <!--<button class="btn btn-raised btn-outline-dark mt-3">Modficar</button>
        <button class="btn btn-raised btn-outline-danger mt-3">Borrar</button>-->
    </div>
    
</form>  
<!--<script src="<?php echo $raizV;?>js/jquery.min.js"></script>-->

 
<script>
document.getElementById("file").onchange = function(e) {
  // Creamos el objeto de la clase FileReader
  let reader = new FileReader();

  // Leemos el archivo subido y se lo pasamos a nuestro fileReader
  reader.readAsDataURL(e.target.files[0]);

  // Le decimos que cuando este listo ejecute el código interno
  reader.onload = function(){
    let preview = document.getElementById('preview'),
            image = document.createElement('img');

    image.src = reader.result;

    preview.innerHTML = '';
    preview.append(image);
  };
}
</script>

<script src="<?php echo $raizV;?>js/registro-producto.js"></script>

