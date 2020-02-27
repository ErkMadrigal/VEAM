<?php
    //importamos clases
   include '../../class/database.php';
    include '../../class/inserciones.php';
    include '../../class/consultas.php';
    
    //creamos objetos de las clases
    $claseInserciones = new inserciones();
    $claseConsultas = new consultas();

    $Modelo = ( $_POST['modelo'] !== "" ) ? $_POST['modelo'] : null ;
    $noDeParte = ( $_POST['noDeParte'] !== "" ) ? $_POST['noDeParte'] : null ;
    $aplicacion = ( $_POST['aplicacion'] !== "") ? $_POST['aplicacion'] : null;
    $diametro = ( $_POST['diametro'] !== "") ? $_POST['diametro'] : null;
    $aspas = ( $_POST['aspas'] !== "") ? $_POST['aspas'] : null;
    $centro = ( $_POST['centro'] !== "") ? $_POST['centro'] : null;
    $rot = ( $_POST['rot'] !== "") ? $_POST['rot'] : null;
    $material = ( $_POST['material'] !== "") ? $_POST['material'] : null;
    $observacion = ( $_POST['observacion'] !== "") ? $_POST['observacion'] : null;
    $cover = ( $_FILES['cover'] !== "") ? $_FILES['cover'] : null;
    $categoria = ( $_POST['categoria'] !== "") ? $_POST['categoria'] : null;

    
    //$cover = $_FILES['cover'];

    $errores=[];

    if($cover['name'] !== ""){
        $path = "../../img/covers-posts/";
        if(!file_exists($path)){
            mkdir($path);
        }
        $targetImg = $path.basename($cover["name"]);
        if(move_uploaded_file($cover["tmp_name"],$targetImg)){
            
            $url = "img/covers-posts/".basename($cover["name"]);
            
            $validarProducto = $claseConsultas->prodValidate($noDeParte);
            $respuesta = null;
            if(!$validarProducto){
                $respuesta = $claseInserciones->registrarProducto($Modelo, $noDeParte, $aplicacion, $diametro, $aspas, $centro, $rot, $material, $observacion, $url, $categoria);
            }else{
                $respuesta["estatus"] = "error";
                $respuesta["mensaje"] = "el Modelo del Producto ya existe";
            }
            echo json_encode($respuesta); 

        }else{
            //$errores[]="no se pudo subir tu archivo";
            echo json_encode("no se logo subir el archivo");
        }
    }else{
        //$errores[]="los campos son necesarios";
        echo json_encode("Todos los campos son necesario");
    }
    //echo json_encode($errores);
    