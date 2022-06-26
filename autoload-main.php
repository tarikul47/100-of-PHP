<?php
/**
 * spl_autoload_register()  function auto run when creates  a new object 
 * Then find out the class 
 * For example: Here first and second two class defined in other two files 
 * The files names same class name 
 * spl_autoload_register() = parameter takes the class name auto 
 * then we set include 
 * the way the file addes here 
 * 
 */


//include 'autoload/first.php';
//include 'autoload/second.php';

spl_autoload_register(function ($class) {
    include "autoload/$class.php";
    //die();
});

$first1 = new first();
$second1 = new second();
