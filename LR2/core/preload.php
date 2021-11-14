<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/vendor/autoload.php";

$router = new \Core\Router\Router();
$router->run();
