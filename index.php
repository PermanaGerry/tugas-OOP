<?php
    // get file form Controller
    require_once 'controller/RegisterUserController.php';
    
    $controller = new RegisterUserController();
    $controller->hendleRequest();

 ?>