<?php

define("DEBUG", 1);

define("ROOT", dirname(__DIR__));

define("WWW", ROOT . "/public");

define("APP", ROOT . "/app");

define("CORE", ROOT . "/vendor/astore/core");

define("LIBS", ROOT . "/vendor/astore/core/libs");

define("CACHE", ROOT . "/tmp/cache");

define("CONF", ROOT . "/config");

define("LAYOUT", ROOT . "default");

$protocol = "http://";

define("PATH", $protocol . $_SERVER["HTTP_HOST"] . "/");

define("ADMIN", PATH . "admin/");

require_once ROOT . "/vendor/autoload.php";