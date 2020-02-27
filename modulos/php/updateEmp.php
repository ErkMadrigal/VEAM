<?php

    //importamos clases
    include '../../class/database.php';
    include '../../class/inserciones.php';
    include '../../class/consultas.php';
   
    
    //creamos objetos de las clases
    $claseInserciones = new inserciones();
    $claseConsultas = new consultas();
    
   
    $nom = ( $_POST['nombreE'] !== "" ) ? $_POST['nombreE'] : null ;
    $ubi = ( $_POST['UbicacionE'] !== "" ) ? $_POST['UbicacionE'] : null ;
    $corH = ( $_POST['CorreoEH'] !== "") ? $_POST['CorreoEH'] : null;
    $corO = ( $_POST['CorreoEO'] !== "") ? $_POST['CorreoEO'] : null;
    $corY = ( $_POST['CorreoEY'] !== "") ? $_POST['CorreoEY'] : null;
    $tel = ( $_POST['telefonoE'] !== "") ? $_POST['telefonoE'] : null;
    $cel = ( $_POST['telefonoECel'] !== "") ? $_POST['telefonoECel'] : null;
    $caracteristicas1 = ( $_POST['caracteristicas1'] !== "") ? $_POST['caracteristicas1'] : null;
    $cualidad = ( $_POST['cualidad'] !== "") ? $_POST['cualidad'] : null;
    $color = ( $_POST['color'] !== "") ? $_POST['color'] : null;
    $nomCorto = ( $_POST['nombreCorto'] !== "") ? $_POST['nombreCorto'] : null;
    
    $claseValidar = new validar();
    
    $errores = [];
    if($claseValidar->isName($nom) === 0 ){
        $errores[] = "por favor ingresa un nombre valido";
    }
    if ($claseValidar->isMail($corH) === 0 ) {
        $errores[] = "ingresa un correo valido";
    }
    if($claseValidar->isMail($corO) === 0 ){
        $errores[] = "ingresa un correo valido";
    }
    if($claseValidar->isMail($corY) === 0){
        $errores[] = "ingresa un correo valido";
    }
    if ($claseValidar->isPhone($tel) === 0 && $claseValidar->isPhone($cel) === 0) {
        $errores[] = "ingresa un numero valido";
    }
    if(count($errores) === 0){
        $validarUsuario = $claseConsultas->empValidateExist( 1 );
        $respuesta = null;
        if($validarUsuario){
            $respuesta = $claseInserciones->upDateEmp($nom, $ubi, $corH, $corO, $corY, $tel, $cel, $caracteristicas1, $cualidad, $color, $nomCorto, 1);
        }else{
            $respuesta["estatus"] = "error";
            $respuesta["mensaje"] = "No existe";
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