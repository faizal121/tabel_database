<?php
include_once 'dbconfig.php';
class Dao{
    var $link;
    public function __construct() {
        $this->link = new Dbconfig();
    }
    public function read(){
        $query="SELECT * FROM users ORDER BY id_user ASC";
        return mysqli_query($this->link->conn, $query);
    }
    public function execute($query){
        $result = mysqli_query($this->link->conn, $query);
        if($result){
            return "sukses...";
        }
        else{
            return mysqli_error($this->link->conn);
        }
    }
}