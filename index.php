<?php

/**
 *  Load namespace to use "USE" keyword
 **/
require_once "vendor/autoload.php";

use Controller\IndexController;

$obj = new IndexController();
$obj->index();