<label class="btn btn-primary btn-file rounded-circle" id="coverPortadaImageP" style="height: 8rem;width: 8rem;background-image: url('<?php echo $raizV.$currentUser["Foto"];?>');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;
                        border: 4px solid white;
                        position: relative;
                        left: 1rem;
                        padding: 0;
                        margin-left: -20rem;">
                       <div class="text-white p-2" style="background: rgba(0,0,0,0.6);
                            border-radius: 0 0 8rem 8rem;
                            height: 4rem;
                            width: 7.5rem;
                            position: absolute;
                            bottom: -1px;
                            left: 0px;
                            text-transform: initial;
                            ">
                            <i class="fas fa-camera"></i>
                            <input type="file"  id="uploadImageP" class="d-none" >Actualizar
                        </div>
                        <br>
                        <div class="nombre" style="font-family: unset; margin-left: 9rem;">
                        <div class="h1 text-dark mt-5"><?php echo $currentUser["Nombre"];?> <?php echo $currentUser["Apellido"];?></div>
                                            
                        </div>
                        </label>
                        <script src="<?php echo $raizV;?>js/jquery.min.js"></script>
<script >
    var url = "<?php echo $raizV;?>";
    $('#uploadImageP').change(function () {
        if( this.files[0] !== undefined){
            dataForm = new FormData();
            dataForm.append('imagen',this.files[0])
            fetch(url+'class/upload-imageP.php',{
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
                $('#coverPortadaImageP').css('background-image', 'url('+e.target.result+')');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>