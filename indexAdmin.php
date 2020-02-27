<?php include "modulos/RaizV.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log</title>
	<link rel="shortcut icon" href="<?php echo $raizV;?>img/LOGOTIPO.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $raizV;?>css/bootstrap-material-design.css">
    <link rel="stylesheet" href="<?php echo $raizV;?>css/all.css">
    <link rel="stylesheet" href="<?php echo $raizV;?>css/styles.css">
    <script src="<?php echo $raizV;?>js/jquery-3.4.1.min.js"></script>

</head>
<?php
	include 'class/database.php';
	include 'class/consultas.php';
    $claseConsultas = new consultas();
    $empresa = $claseConsultas->getEmpresa(1);
?>
<style>
  #contenedor-carga{
    background-color:rgba(255,255,255,0.5);
    height:100%;
    width:100%;
    position:fixed;
    -webkit-transition: all 1a ease;
    -o-transition:all 1s ease;
    transition:all 1s ease;
    z-index:10000;
  }
  #carga{
    border:15px solid #ccc;
    border-top-color: #3defe7;
    border-top-style:groove;
    height:100px;
    width:100px;
    border-radius:100%;
    position:absolute;
    top:0;
    left:0;
    right:0;
    bottom:0;
    margin:auto;
    -webkit-animation:girar 1.5s linear infinite;
    -o-animation:girar 1.5s linear infinite;
    animation:girar 1.5 linear infinite;
  }
  @keyframes girar{
    from{transform:rotate(0deg);}
    to{transform:rotate(360deg);}
  }
</style>
<body>
	<div id="contenedor-carga">
		<div id="carga"></div>  
	</div>
	<script>
		window.onload=function(){
		var contenedor=document.getElementById('contenedor-carga');
		contenedor.style.visibility='hidden';
		contenedor.style.opacity='0';
		}
	</script>
			<section id='contenedor_general'  style="background-image: url(<?php echo $raizV.$empresa['Portada'];?>);">
			</section>
			<?php include 'modulos/componentes/reloj.php';?>

			<section id='body'>
				<section id='scrolldown' style="margin-bottom: 25%;display:block !important;">
					<p id='titulo'>Inicio de Sesion</p>
					<p id='menorque'><</p>
				</section>

				<section id='seccion' class="mx-auto" style="margin-bottom: 15%; margin-top:9rem;">
						<div class="mx-auto card col-lg-5 col-md-10 col-sm-12 " style="border-radius:1rem;">
							<div class="card-header h4"> Inicia Sesion </div>
							<div class="alert alert-danger mt-4" id="respuestaErronea" role="alert"></div>
							
							<form id="loginUser" class="login-validation" novalidate class="mb-0">
								<div class="row">
								<div class="col-1 mt-4"><i class="fas fa-sign-in-alt" style="font-size: 2rem; color: rgba(0,0,0,0.3);"></i></div>
									<div class="col-11 mt-4">
									
										<input type="text" style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;"
										 name="correoLogin" class="form-control" required placeholder="Correo electrónico o teléfono" >
										<div class="invalid-tooltip">
											Por favor ingresa tu correo o tu telefono.
										</div>
									</div>
									<div class="col-1 mt-4"><i class="fas fa-key" style="font-size: 2rem; color: rgba(0,0,0,0.3);"></i></div>
									<div class="col-11 mt-4">
										<input type="password" style="background: white;border-radius: 3px; border: 1px solid #bdc7d8;" 
										name="paswordLogin"  class="form-control" required placeholder="Contraseña" >
										<div class="invalid-tooltip">
											Por favor ingresa tu contraseña.
										</div>
									</div>
									<div class="col-12 mt-4">
										<button class="btn  btn-raised btn-outline-dark float-right mr-3">Entrar</button>
									</div>
								</div>
							</form> 
						</div>
				</section>
			</section>
<script>
    var raiz = "<?php echo $raizV;?>";
</script>
<script src="js/login-usuario.js"></script>
	<?php $mostrarFooter=false; $mostrarBnt=false;  include 'modulos/componentes/footer.php'; ?>
		