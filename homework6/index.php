<?php

$controller = $_GET['controller'] ?? 'home';
$routes = require 'controller/routes.php';

require_once $routes[$controller];