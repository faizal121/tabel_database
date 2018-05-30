<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'admin');
define('DB_PASS', 'admin');
define('DB_NAME', 'mikirWEB');

class Dbconfig{
    var $conn;
    function __construct() {
        $this->conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        if ($this->conn->connect_error){
            echo $this->conn->connect_error;
            exit();
        }
    }
}