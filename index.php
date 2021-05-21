<?php
//Turn on error-reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require necessary files
require_once ('vendor/autoload.php');
require_once ('model/data-layer.php');

//Start a session AFTER the autoload***
session_start();

//Instantiate Fat-Free and controller
$f3 = Base::instance();
$con = new Controller($f3);
//Define default route
$f3->route('GET /', function(){

    // user GLOBALS array to access the var while inside anonymous function
    $GLOBALS['con']->home();
});