<?php
include ('init.php');
$router = new classes\Route();
$controllerName = __CONTROLLERS__.$router->getController();
$controller = new $controllerName();
?>
