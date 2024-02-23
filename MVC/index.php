<?php
$controller = $_GET['controller'];
$action = $_GET['action'];


    include ("{$controller}_controllers.php");
    
    $controllerClass = $controller . "_controllers";
    $obj = new $controllerClass();

    $obj->{$action}();
?>
