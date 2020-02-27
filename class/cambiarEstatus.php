<?php 
include 'database.php';
$claseDataBase = new database();
$Estatus = $_POST['Estatus']; 
$idUsuario = $_POST['idUsuario'];
$respuesta = null;

try{
    $sql="UPDATE usuarios SET Estatus= $Estatus WHERE IdUsr= $idUsuario";
     $claseDataBase->obtenerConexion()->query($sql);
     $respuesta['estado'] = 'ok';
     $respuesta['mensaje'] = "Se le cambio el roll corectamente al usr";
     
}catch(PDOEXCEPTION $e){
    $respuesta['estado'] = 'error';
    $respuesta['mensaje'] = $e->getMessage();
}

echo json_encode($respuesta);