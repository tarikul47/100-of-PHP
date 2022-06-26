<?php
//require "cat.php";
//require 'man.php';

spl_autoload_register(function($fileName){
    $path = str_replace('cat\\','',$fileName);
    //echo $path;
    include "$path.php";
    //die();
});

$obj = new \cat\cat(); // cat object defined here 
//$obj = new \Man\Man(); // cat object defined here 