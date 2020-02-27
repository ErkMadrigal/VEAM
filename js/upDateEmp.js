(()=> {
    'use strict';
    window.addEventListener('load', () => {
        const respuestaCorrectaEmp = document.getElementById('respuestaCorrectaEmp');
        const respuestaErroneaEmp = document.getElementById('respuestaErroneaEmp');
        respuestaCorrectaEmp.style.display = 'none';
        respuestaErroneaEmp.style.display = 'none';
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validationEm');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, (form) => {
            form.addEventListener('submit',  (event) => {
                event.preventDefault();
                event.stopPropagation();
                if (form.checkValidity()) {
                    let dataForm = new FormData(forms[0]);
                    fetch('../php/updateEmp.php',{
                        method : 'POST',
                        body : dataForm
                    })
                    .then((response) => response.json())
                    .then((data)=>{
                        console.log(data)
                        if(data.estado === 'ok'){
                            respuestaCorrectaEmp.innerHTML = data.mensaje;
                            respuestaCorrectaEmp.style.display = 'block';
                            respuestaErroneaEmp.style.display = 'none';
                        }else{
                            if(data.length !== undefined){
                                respuestaErroneaEmp.innerHTML  = '';
                                data.forEach((res) => {
                                    respuestaErroneaEmp.innerHTML += `<p class="mb-0">${res}</p>`;
                                });
                            }else{
                                respuestaErroneaEmp.innerHTML = data.mensaje;
                            }
                            respuestaErroneaEmp.style.display = 'block';
                            respuestaCorrectaEmp.style.display = 'none';
                        }
                    })
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();