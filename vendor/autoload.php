<?php
// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require
require_once ('vendor/autoload.php');

// Instantiate the F3 Base class
$f3 = Base::instance();
//Base f3 = new Base();

//Define a default route
$f3->route('GET /', function () {
    echo "<h1> Hello </h1>";
)};

$f3->run();