<?php
    class registerModel{
        private $DBconnection;
        public function __construct() {
            require_once('./proyecto/config/DBconnection.php');
            $this->DBconnection = new DBconnection();
        }
        public function insert($user){
            if(!isset($user['user'], $user['pass'], $user['name'], $user['app'], $user['tel'], $user['email'], $user['address'])){
                return false;
            }
            $user=$user['user'];
            $pass=$user['pass'];
            $name=$user['name'];
            $app=$user['app'];
            $tel=$user['tel'];
            $email=$user['email'];
            $address=$user['address'];
            $consulta="INSERT INTO usuarios(usuario,contraseña,nombre,apellido,telefono,email,direccion,fecha_registro)
            VALUES ('$user','$pass','$name','$app','$tel','$email','address','NOW()')";
            $coneccion= $this->DBconnection->get_connection();
            $resultado=$coneccion->query($consulta);
            $respuesta= $resultado ? true:false;
            $this->DBconnection->close_connection();
            return $respuesta;
        }
    }
