<?php
    include_once("app/model/bookModel.php");
    class bookController{
        private $bookmodel;
        public function CallInsert(){
        //    $this->bookmodel=new bookModel();
        //    $datos=$this->bookmodel->get_all();
            $vista = "app/view/admin/libros/bookregister.php";
            include_once("app/view/admin/plantillaView.php");
            /*session_start();
            if(isset($_SESSION['logedin']) && $_SESSION['logedin']==true){
                include_once("app/view/admin/plantillaView.php");
            }else{
                $vista="app/view/admin/usuarios/formLoginView.php";
                include_once("app/view/admin/plantillaView.php");
            }*/
        }
        public function CallIndex(){
            $this->bookmodel=new bookModel();
            $datos=$this->bookmodel->get_all();
            $vista = "app/view/admin/libros/Indexbook.php";
            include_once("app/view/admin/plantillaView.php");
        }
        public function insert(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $book=array(
                    'isbn'=>$_POST['isbn'],
                    'title'=>$_POST['title'],
                    'author'=>$_POST['author'],
                    'edit'=>$_POST['edit'],
                    'cat'=>$_POST['cat'],
                    'apublic'=>$_POST['apublic'],
                    'cant'=>$_POST['cant']
                );
                $bookmodel= new bookModel();
                $resultado=$bookmodel->insertB($book);
                if($resultado){
                    header("location:http://localhost/bibliotech?C=bookController&M=CallIndex");
                }else{
                    header("location:http://localhost/bibliotech");
                }
            }
        }
        public function delete(){
            if($_SERVER['REQUEST_METHOD']=='GET'){
                $isbn=$_GET['id'];
                $this->bookmodel=new bookModel();
                $respuesta=$this->bookmodel->deleteB($isbn);
                if($respuesta){
                    header("location:http://localhost/bibliotech?C=bookController&M=CallIndex");
                }else{
                    header("location:http://localhost/bibliotech");
                }
            }
        }
    }