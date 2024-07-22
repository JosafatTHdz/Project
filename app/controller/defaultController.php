<?php
    class defaultController{
        private $vista;

        public function index(){
            $vista="app/view/adminHomeView.php";
            include_once("app/view/admin/plantillaView.php");
        }
    }