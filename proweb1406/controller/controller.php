<?php

include "model/model.php";

class controller {
    public $model;
    function __construct() {
        $this->model = new model();
    }
    
    function viewIndex(){
        $user= $this->model->getAllData();
        include "view_index/view_index.php";
        
    }
        
}
