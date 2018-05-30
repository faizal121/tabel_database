<?php

include "controller/controller.php";
$main = new controller();
if (isset($_GET ['login'])) {
   // 
} else {
    $main->viewIndex();
}