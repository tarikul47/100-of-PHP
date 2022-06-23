<?php
/**
 * Parent class define static property can acess by self
 * if we set slef then we can't overirde form child class
 * 
 * so if we use static then we can overridae from child class 
 */

class Base
{

    protected static $name = "yahoo";
    public function show()
    {
       // echo self::$name; // self = slef class 
        echo static::$name; // calling object 
    }
}

class Derived extends Base
{
    protected static $name = "Raju";
}

// $test = new Base();
// $test->show();  = output = yahoo 

$test = new Derived();
$test->show(); // Raju
