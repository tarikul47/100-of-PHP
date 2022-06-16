<?php
/**
 * static method and property set  = static keyword
 * static method and property access =
 *  -  self:: =  in class
 *  -  ClassName::Proeprty/Method
 *
 */
// drive clsss

class Calculation
{
    static $name = "Tarikul Islam";

    public function show()
    {
        echo 'Public method' . "\n";

    }
    public function subCal()
    {
        echo $c + $d;
    }
    public static function getName()
    {
        echo self::$name;
        //echo 'self::name';
    }
}

// Object create
$cal = new Calculation();

// public method
$cal->show();

// static method 
Calculation::getName();


