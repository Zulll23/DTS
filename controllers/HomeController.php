<?php

class HomeController{
    private $userModel;
    
    public function __construct(){
        $this->userModel = new User();
    }
    public function index(){
        $users = $this->userModel->getAllUsers();
        require '../App/views/Home.php';
        // require '../views/Home.php';
    }
}
?>