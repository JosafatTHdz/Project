<?php
    require_once('./proyecto/model/registerModel.php');
    class registerController{
        private $registermodel;
        public function insert(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $user= array(
                    'usuario'=>@$_POST['user'],
                    'pass'=>@$_POST['pass'],
                    'nombre'=>$_POST['name'],
                    'apellido'=>$_POST['app'],
                    'tel'=>$_POST['tel'],
                    'email'=>$_POST['email'],
                    'address'=>$_POST['address'],
                );
                $registermodel= new registerModel();
                $resultado=$registermodel->insert($user);
                if($resultado){
                    header("location:http://localhost/php-3a/?C=alumnoController&M=index");
                }else{
                    header("location:http://localhost/php-3a");
                }
            }
        }
    }
    