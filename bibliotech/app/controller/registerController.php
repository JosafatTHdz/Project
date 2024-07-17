<?php
    include_once("app/model/registerModel.php");
    class registerController{
        private $registermodel;

        public function index(){
            $vista = "app/view/admin/registro/register.php";
            include_once("app/view/admin/plantillaView.php");
        }
        public function CallInsert(){
            $vista = "app/view/admin/registro/register.php";
            include_once("app/view/admin/plantillaView.php");
        }
        public function insert(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                echo'post';
                $user=array(
                    'user'=>$_POST['user'],
                    'pass'=>$_POST['pass'],
                    'name'=>$_POST['name'],
                    'app'=>$_POST['app'],
                    'tel'=>$_POST['tel'],
                    'email'=>$_POST['email'],
                    'address'=>$_POST['address'],
                );
                $registermodel= new registerModel();
                $resultado=$registermodel->insert($user);
                if($resultado){
                    header("location:http://localhost/bibliotech?C=registerController&M=index");
                }else{
                    header("location:http://localhost/bibliotech");
                }
            }
            else{
                echo 'get';
            }
        }
    }
    