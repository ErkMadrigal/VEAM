<div class="wrap col-lg-6 col-md-12 mt-3">
        <div class="widget p-3">
            <div class="fecha p-3">
                <p id="diaSemana" class="diaSemana"></p>
                <p id="dia" class="dia"></p>
                <p>de</p>
                <p id="mes" class="mes"></p>
                <p>del</p>
                <p id="year" class="year"></p>
            </div>

            <div class="reloj p-5">
                <p id="horas" class="horas"></p>
                    <p>:</p>
                <p id="minutos" class="minutos"></p>
                <p>:</p>
                <div class="caja-segundos">
                    <p id="ampm" class="ampm"></p>
                    <p id="segundos" class="segundos"></p>
                </div>   
            </div>
        </div>
    </div>
    <script src="<?php echo $raizV;?>js/reloj.js"></script>