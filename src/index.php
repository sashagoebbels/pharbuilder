<?php

require_once "phar://APPNAME.phar/common.php";

$config = parse_ini_file("phar://APPNAME.phar/config.ini", true);

AppManager::run($config);
