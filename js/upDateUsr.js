    (()=> {
    'use strict';
    window.addEventListener('load', () => {
        const respuestaCorrectaU = document.getElementById('respuestaCorrectaU');
        const respuestaErroneaU = document.getElementById('respuestaErroneaU');
        respuestaCorrectaU.style.display = 'none';
        respuestaErroneaU.style.display = 'none';
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('modificarDP');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, (form) => {
            form.addEventListener('submit',  (event) => {
                event.preventDefault();
                event.stopPropagation();
                if (form.checkValidity()) {
                    let dataForm = new FormData(forms[0]);
                    fetch('../php/updateUser.php',{
                        method : 'POST',
                        body : dataForm
                    })
                    .then((response) => response.json())
                    .then((data)=>{
                        console.log(data)
                        if(data.estado === 'ok'){
                            respuestaCorrectaU.innerHTML = data.mensaje;
                            respuestaCorrectaU.style.display = 'block';
                            respuestaErroneaU.style.display = 'none';
                        }else{
                            if(data.length !== undefined){
                                respuestaErroneaU.innerHTML  = '';
                                data.forEach((res) => {
                                    respuestaErroneaU.innerHTML += `<p class="mb-0">${res}</p>`;
                                });
                            }else{
                                respuestaErroneaU.innerHTML = data.mensaje;
                            }
                            respuestaErroneaU.style.display = 'block';
                            respuestaCorrectaU.style.display = 'none';
                        }
                    })
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();