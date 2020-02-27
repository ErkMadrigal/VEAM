(()=> {
    'use strict';
    window.addEventListener('load', () => {
        const respuestaCorrectaP = document.getElementById('respuestaCorrectaP');
        const respuestaErroneaP = document.getElementById('respuestaErroneaP');
        respuestaCorrectaP.style.display = 'none';
        respuestaErroneaP.style.display = 'none';
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validationP');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, (form) => {
            form.addEventListener('submit',  (event) => {
                event.preventDefault();
                event.stopPropagation();
                if (form.checkValidity()) {
                    let dataForm = new FormData(forms[0]);
                    fetch('../php/registrar-producto.php',{
                        method : 'POST',
                        body : dataForm
                    })
                    .then((response) => response.json())
                    .then((data)=>{
                        console.log(data);
                        if(data.estado === 'ok'){
                            respuestaCorrectaP.innerHTML = data.mensaje;
                            respuestaCorrectaP.style.display = 'block';
                            respuestaErroneaP.style.display = 'none';
                            form.reset();
                            form.classList.remove('was-validated');
                        }else{
                            if(data.length !== undefined){
                                respuestaErroneaP.innerHTML  = '';
                                data.forEach((res) => {
                                    respuestaErroneaP.innerHTML += `<p class="mb-0">${res}</p>`;
                                });
                            }else{
                                respuestaErroneaP.innerHTML = data.mensaje;
                            }
                            respuestaErroneaP.style.display = 'block';
                            respuestaCorrectaP.style.display = 'none';
                        }
                    })
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();