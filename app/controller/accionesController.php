<?php
    include_once('app/model/accionesModel.php');
    class accionesController{
        private $accionesmodel;
        public function index(){
            include_once('app/controller/bookController.php');
            $this->accionesmodel=new accionesModel();
            $books=$this->accionesmodel->get_all();
            $vista = "app/view/admin/acciones/prestamos.php";
            session_start();
            if(isset($_SESSION['logedin']) && $_SESSION['logedin']==true){
                include_once("app/view/admin/plantillaView.php");
            }else{
                $vista ="app/view/admin/usuarios/login.php";
                include_once("app/view/admin/plantillaView2.php");
            }
        }
        public function regPrest(){
            if($_SERVER['REQUEST_METHOD']=='GET'){
                $Nprest=array(
                    'titulo'=>$_GET['titulo'],
                    'usuario'=>$_GET['usuario']
                );
                echo "Datos recibidos: ";
        print_r($Nprest);
                $accionesmodel= new accionesModel();
                $resultado=$accionesmodel->regPrestamo($Nprest);
                if($resultado){
                    header("location:http://localhost/bibliotech?C=registerController&M=index");
                }else{
                    header("location:http://localhost/bibliotech");
                }
            }
        }
    }