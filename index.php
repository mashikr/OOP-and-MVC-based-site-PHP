<?php

require('config.php');

require ('classes/Base.php');

$base = new Base($_GET);

$base->createController();