<?php

require('config.php');

require ('classes/Base.php');
require ('classes/Controller.php');
require ('classes/Model.php');

require('controllers/home.php');
require('controllers/shares.php');
require('controllers/users.php');

require('models/home.php');
require('models/share.php');
require('models/user.php');

$base = new Base($_GET);

$controller = $base->createController();
if ($controller) {
    $controller->executeAction();
}