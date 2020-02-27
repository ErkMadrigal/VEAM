<?php
    //importamos clases
    include '../../class/database.php';
    include '../../class/inserciones.php';
    include '../../class/consultas.php';
    
    //creamos objetos de las clases
    $claseInserciones = new inserciones();
    $claseConsultas = new consultas();

    $nombreUsuario = ( $_POST['nombre'] !== "" ) ? $_POST['nombre'] : null ;
    $apellido = ( $_POST['apellido'] !== "" ) ? $_POST['apellido'] : null ;
    $correo = ( $_POST['correo'] !== "") ? $_POST['correo'] : null;
    $telefono = ( $_POST['numero'] !== "") ? $_POST['numero'] : null;
    $contrasenia = ( $_POST['pass'] !== "") ? $_POST['pass'] : null;
    $claseValidar = new validar();

    $errores = [];
    
    if($claseValidar->isName($nombreUsuario) === 0 ){
        $errores[] = "por favor ingresa un nombre valido";
    }
    if($claseValidar->isName($apellido) === 0 ){
        $errores[] = "por favor ingresa un apellido valido";
    }
    if ( $claseValidar->isMail( $correo ) === 0 ){
        $errores[] = "ingresa un correo o un numero valido";
    }
    if ($claseValidar->isPhone( $telefono ) === 0) {
        $errores[] = "ingresa un correo valido";
    }
    
    if(count($errores) === 0){
        $validarUsuario = $claseConsultas->userValidate($contrasenia , $telefono , $correo);
        $respuesta = null;
        if(!$validarUsuario){
            $respuesta = $claseInserciones->registrarUsuario($nombreUsuario, $apellido, $correo, $telefono,1, 1, $contrasenia,'img/default-profile.png');
        }else{
            $respuesta["estatus"] = "error";
            $respuesta["mensaje"] = "el usuario ya existe";
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