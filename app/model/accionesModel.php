<?php
    class accionesModel{
        private $DBconnection;
        public function __construct(){
            require_once('app/config/DBconnection.php');
            $this->DBconnection = new DBconnection();
        }
        public function get_all(){
            $consulta="SELECT * FROM libros";
            $coneccion= $this->DBconnection->get_connection();
            $resultado= $coneccion->query($consulta);
            $libros=array();
            while($libro=$resultado->fetch_assoc()){
                $libros[]=$libro;
            }
            $this->DBconnection->close_connection();
            return $libros;
        }
        public function regPrestamo($Nprest){
            if(!isset($Nprest['titulo'], $Nprest['usuario'])){
                return false;
            }
            $title=$Nprest['titulo'];
            $user=$Nprest['usuario'];
            $consulta="CALL insertar_prestamo('$title', '$user');";
            echo "Consulta: " . $consulta;
            $coneccion= $this->DBconnection->get_connection();
            $resultado=$coneccion->query($consulta);
            $respuesta= $resultado ? true:false;
            $this->DBconnection->close_connection();
            return $respuesta;
        }
    }