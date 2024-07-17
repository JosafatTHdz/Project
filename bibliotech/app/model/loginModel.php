<?php
    class loginModel {
        private $DBconnection;
        public function __construct() {
            require_once('app/config/DBconnection.php');
            $this->DBconnection = new DBconnection();
        }
        public function login($username, $password) {
            $consulta="Select * usuarios";
        }
    }