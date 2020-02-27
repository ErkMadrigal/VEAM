<?php
    class consultas{

        public function userValidate( $contrasenia, $telefono , $correo ){
            $response  = null;

            $sql = "SELECT * FROM usuarios WHERE Telefono='$telefono' AND Correo='$correo' AND Contrasenia='$contrasenia'";
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $count = $stmt->rowCount();
                $response  = ( $count > 0  ) ? true : false;
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }
        public function userValidateExist( $idUser ){
            $response  = null;

            $sql = "SELECT * FROM usuarios WHERE IdUsr='$idUser'";
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $count = $stmt->rowCount();
                $response  = ( $count > 0  ) ? true : false;
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }
        public function empValidateExist( $idEmp ){
            $response  = null;

            $sql = "SELECT * FROM empresa WHERE IdEmpresa='$idEmp'";
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $count = $stmt->rowCount();
                $response  = ( $count > 0  ) ? true : false;
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }
        public function userLogin( $contrasenia, $telefono , $correo ){
            $response  = null;
            $concat1  = ( $telefono == '' ) ? '' : "telefono = '$telefono'";
            $concat2  = ( $correo == '' ) ? '' : "correo='$correo'";

            $sql = "SELECT * FROM usuarios WHERE  ".$concat1." ". $concat2." AND contrasenia='$contrasenia'";

            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $count = $stmt->rowCount();
                $response  = ( $count > 0  ) ? true : false;
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }
        public function userData( $contrasenia, $telefono , $correo ){
            $response  = null;
            $concat1  = ( $telefono == '' ) ? '' : "telefono = '$telefono'";
            $concat2  = ( $correo == '' ) ? '' : "correo='$correo'";

            $sql = "SELECT IdUsr FROM usuarios WHERE  ".$concat1." ". $concat2." AND contrasenia='$contrasenia'";
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $response  = $stmt->fetch();
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        } 
        
        public function getDataUser( $idUser ) {
            $sql = "SELECT Nombre,Apellido,Foto,Correo,Telefono,Contrasenia FROM usuarios WHERE IdUsr = '$idUser'";
            $response = null;
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $response  = $stmt->fetch();
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }
        public function prodValidate($noDeParte){
            $response  = null;

            $sql = "SELECT * FROM producto WHERE NoDeParte='$noDeParte'";
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $count = $stmt->rowCount();
                $response  = ( $count > 0  ) ? true : false;
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }

        public function getEmpresa($idEmpresa){
            $response  = null;

            $sql = "SELECT * FROM empresa WHERE IdEmpresa='$idEmpresa'";
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $response  = $stmt->fetch();
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }

        public function getProducto($idProd){
            $response  = null;

            $sql = "SELECT * FROM producto WHERE IdProducto='$idProd'";
            try{
                $claseConexion = new database();
                $stmt = $claseConexion->obtenerConexion()->query($sql);
                $response  = $stmt->fetch();
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }
    }