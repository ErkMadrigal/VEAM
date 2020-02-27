<?php
    session_start();

    //importamos clases
    include '../../class/database.php';
    include '../../class/inserciones.php';
    include '../../class/consultas.php';
   
    
    //creamos objetos de las clases
    $claseInserciones = new inserciones();
    $claseConsultas = new consultas();
    
    $idUser = $_SESSION['uid'];
   
    $nom = ( $_POST['nombreP'] !== "" ) ? $_POST['nombreP'] : null ;
    $ape = ( $_POST['apellidoP'] !== "" ) ? $_POST['apellidoP'] : null ;
    $cor = ( $_POST['correoP'] !== "") ? $_POST['correoP'] : null;
    $tel = ( $_POST['numeroP'] !== "") ? $_POST['numeroP'] : null;
    $pass = ( $_POST['contraseniaP'] !== "") ? $_POST['contraseniaP'] : null;
    $claseValidar = new validar();
    
    $errores = [];
    if($claseValidar->isName($nom) === 0 ){
        $errores[] = "por favor ingresa un nombre valido";
    }
    if($claseValidar->isName($ape) === 0 ){
        $errores[] = "por favor ingresa un apellido valido";
    }
    if ($claseValidar->isMail($cor) === 0) {
        $errores[] = "ingresa un correo valido";
    }
    if ($claseValidar->isPhone($tel) === 0) {
        $errores[] = "ingresa un numero valido";
    }
    if(count($errores) === 0){
        $validarUsuario = $claseConsultas->userValidateExist( $idUser );
        $respuesta = null;
        if($validarUsuario){
            $respuesta = $claseInserciones->upDateUsr($nom, $ape, $tel, $cor, $pass, $idUser);
        }else{
            $respuesta["estatus"] = "error";
            $respuesta["mensaje"] = "el usuario no existe";
        }
        echo json_encode($respuesta);           
    }
    else{
        echo json_encode($errores);
    }
    

    class validar{
        
        public function isEmpty( $string ) {
            return isset($string);
        }

        public function isName( $string ) {
            $regex = "/^[a-z-A-Z\D]+$/";
            return preg_match( $regex , $string );
        }

        public function isMail( $mail ) {
            $regex = "/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$/";
            $mail = strtolower( $mail );
            return preg_match( $regex , $mail );
        }

        public function isPhone( $phone ) {
            $regex = "/^[0-9-]*$/";
            return preg_match( $regex , $phone );
        }

    }