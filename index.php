<?php

require('config.php');

require ('classes/Base.php');
require ('classes/Controller.php');

require('controllers/home.php');
require('controllers/shares.php');
require('controllers/users.php');

$base = new Base($_GET);

$controller = $base->createController();
if ($controller) {
    $controller->executeAction();
}