<?php
    class bookModel{
        private $DBconnection;
        public function __construct() {
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
        public function insertB($book){
            if(!isset($book['isbn'], $book['title'], $book['author'], $book['edit'], $book['cat'], $book['apublic'], $book['cant'])){
                return false;
            }
            $isbn=$book['isbn'];
            $title=$book['title'];
            $author=$book['author'];
            $edit=$book['edit'];
            $cat=$book['cat'];
            $apublic=$book['apublic'];
            $cant=$book['cant'];
            $consulta="INSERT INTO libros(ISBN, Titulo, Autor, Editorial, Categoria, Año_publicacion, Cantidad)
            VALUES ('$isbn','$title','$author','$edit','$cat','$apublic','$cant')";
            $coneccion= $this->DBconnection->get_connection();
            $resultado=$coneccion->query($consulta);
            $respuesta= $resultado ? true:false;
            $this->DBconnection->close_connection();
            return $respuesta;
        }
        public function deleteB($isbn){
            $consulta = "DELETE FROM libros WHERE isbn = ". $isbn;
            $coneccion= $this->DBconnection->get_connection();
            $resultado = $coneccion->query($consulta);
            if($resultado){
                $respuesta=true;
            }else{
                $respuesta=false;
            }
            $this->DBconnection->close_connection();
            return $respuesta;
        }
    }