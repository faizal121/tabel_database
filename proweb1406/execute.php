<?php

ini_set('display_errors','on');
error_reporting(E_ALL);
include_once 'config/dao.php';
$dao = new Dao();

/***********************************
 * Menangkap data dari isian form
 **********************************/

$id = $_POST['id'];
$usrnm = $_POST['username'];
$fullname = $_POST['fullname'];
$pasword = $_POST['password'];
$email = $_POST['email'];
$telp = $_POST['telepon'];
$banned = $_POST['banned'];
$akses = $_POST['akses'];

$aks = 0;
for($index = 0; $index < count($akses); $index++){
    $aks = $aks + $_POST['akses'][$index];
}

$query = "INSERT INTO login (usrnm,fullname,pasword,email,telp,banned,akses)"
        . "VALUE ('$usrnm','$fullname','$pasword','$email','$telp','$banned','$aks')";
$in = $dao->execute($query);
echo $in;