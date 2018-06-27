<?php

session_start();

require_once  __DIR__ . "/../config/init.php";

require_once CONF . "/routes.php";

require_once LIBS . "/functions.php";

$app = new astore\App();


debug(\astore\Router::getRoutes());



