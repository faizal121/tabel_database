<?php

ini_set('display_eror', 0);
error_reporting(E_ALL);
define('DB_HOST', 'localhost');
define('DB_USER', 'admin');
define('DB_PASS', 'admin');
define('DB_NAME', 'mikirWEB');

class model {

    var $conn;

    function __construct() {
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    function execute($query) {
        return mysqli_query($this->conn, $query);
    }

    function getAllData() {
        $query = "SELECT * FROM login";
        return $this->execute($query);
    }

    function fetch($result) {
        return mysqli_fetch_array($result);
    }

}
