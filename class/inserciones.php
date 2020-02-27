<?php
    class inserciones{

        public function registrarUsuario($nombre , $apellidoPaterno , $correo , 
                                        $telefono , $estatus , $sucursal , $contrasenia , $avatar ){
            $respuesta = null;
            $sql = "INSERT INTO  usuarios (Nombre, Apellido, Correo, Telefono, Estatus, Sucursal, Contrasenia, Foto) 
                                           values (:Nombre, :Apellido, :Correo, :Telefono, :Estatus, :Sucursal, :Contrasenia, :Foto)";
            try {
                $claseConexion = new database();
                $db = $claseConexion->obtenerConexion();
                $stmt = $db->prepare($sql);
                $stmt->bindParam(":Nombre", $nombre);
                $stmt->bindParam(":Apellido", $apellidoPaterno);
                $stmt->bindParam(":Correo", $correo);
                $stmt->bindParam(":Telefono", $telefono);
                $stmt->bindParam(":Estatus", $estatus);
                $stmt->bindParam(":Sucursal", $sucursal);
                $stmt->bindParam(":Contrasenia", $contrasenia);
                $stmt->bindParam(":Foto", $avatar);
                $stmt->execute();
                $respuesta['estado'] = "ok";
                $respuesta['mensaje'] = "Se creo correctamente el usuario";
            } 
            catch (PDOEXCEPTION $e) {
                $respuesta['estado'] = "error";
                $respuesta['mensaje']  = $e->getMessage();
            }
            return $respuesta;
        }

        public function registrarProducto($Modelo, $noDeParte, $aplicacion, $diametro, $aspas, $centro, $rot, $material, $observacion, $url, $categoria){
            $respuesta = null;
            $sql = "INSERT INTO producto (Modelo, NoDeParte, Aplicacion, Diametro, Aspas, Centro, Rot, Material, Observacion, Foto, categoria) 
            VALUES (:Modelo, :NoDeParte, :Aplicacion, :Diametro, :Aspas, :Centro, :Rot, :Material, :Observacion, :Foto, :categoria)";
            try {
                $claseConexion = new database();
                $db = $claseConexion->obtenerConexion();
                $stmt = $db->prepare($sql);
                $stmt->bindParam(":Modelo", $Modelo);
                $stmt->bindParam(":NoDeParte", $noDeParte);
                $stmt->bindParam(":Aplicacion", $aplicacion);
                $stmt->bindParam(":Diametro", $diametro);
                $stmt->bindParam(":Aspas", $aspas);
                $stmt->bindParam(":Centro", $centro );
                $stmt->bindParam(":Rot", $rot);
                $stmt->bindParam(":Material", $material);
                $stmt->bindParam(":Observacion", $observacion );
                $stmt->bindParam(":Foto", $url);
                $stmt->bindParam(":categoria", $categoria);
                $stmt->execute();
                $respuesta['estado'] = "ok";
                $respuesta['mensaje'] = "Se registro correctamente el producto ";
            } 
            catch (PDOEXCEPTION $e) {
                $respuesta['estado'] = "error";
                $respuesta['mensaje']  = $e->getMessage();
            }
            return $respuesta;
        }

        public function upDateUsr($nom, $ape, $tel, $cor, $pass, $idUser){
            $respuesta = null;
            $sql = "UPDATE usuarios SET Nombre=:Nombre, Apellido=:Apellido, Correo=:Correo, Telefono=:Telefono, Contrasenia=:Contrasenia
             WHERE IdUsr=:IdUsr";
            try {
                $claseConexion = new database();
                $db = $claseConexion->obtenerConexion();
                $stmt = $db->prepare($sql);
                $stmt->bindParam(":Nombre", $nom);
                $stmt->bindParam(":Apellido", $ape);
                $stmt->bindParam(":Correo", $cor);
                $stmt->bindParam(":Telefono", $tel);
                $stmt->bindParam(":Contrasenia", $pass);
                $stmt->bindParam(":IdUsr", $idUser);
                $stmt->execute();
                $respuesta['estado'] = "ok";
                $respuesta['mensaje'] = "Se actualizo correctamente ";
            } 
            catch (PDOEXCEPTION $e) {
                $respuesta['estado'] = "error";
                $respuesta['mensaje']  = $e->getMessage();
            }
            return $respuesta;
        }  
        
        public function upDateEmp($nom, $ubi, $corH, $corO, $corY, $tel, $cel, $caracteristicas1, $cualidad, $color, $nomCorto, $idEmp){
            $respuesta = null;
            $sql = "UPDATE empresa SET 
            Nombre=:Nombre, sucursal=:sucursal, telefono=:telefono, whats=:whats, correoH=:correoH, correoO=:correoO, correoY=:correoY,
            caracteristicas1=:caracteristicas1, cualidad=:cualidad, color=:color, NombreCorto=:NombreCorto
             WHERE IdEmpresa=:IdEmpresa";
            try {
                $claseConexion = new database();
                $db = $claseConexion->obtenerConexion();
                $stmt = $db->prepare($sql);
                $stmt->bindParam(":Nombre", $nom);
                $stmt->bindParam(":sucursal", $ubi);
                $stmt->bindParam(":telefono", $tel);
                $stmt->bindParam(":whats", $cel);
                $stmt->bindParam(":correoH", $corH);
                $stmt->bindParam(":correoO", $corO);
                $stmt->bindParam(":correoY", $corY);
                $stmt->bindParam(":caracteristicas1", $caracteristicas1);
                $stmt->bindParam(":cualidad", $cualidad);
                $stmt->bindParam(":color", $color);
                $stmt->bindParam(":NombreCorto", $nomCorto);

                $stmt->bindParam(":IdEmpresa", $idEmp);
                $stmt->execute();
                $respuesta['estado'] = "ok";
                $respuesta['mensaje'] = "Se actualizo correctamente ";
            } 
            catch (PDOEXCEPTION $e) {
                $respuesta['estado'] = "error";
                $respuesta['mensaje']  = $e->getMessage();
            }
            return $respuesta;
        }
    }