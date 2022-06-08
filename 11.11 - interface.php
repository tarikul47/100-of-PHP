<?php
/**
 * interface may not include a varaible
 * not need access type modifieer [protectet, private]
 * public can keep
 * not call object instance 
 * inheritance vs interface 
 *  - inheritance = we can inherite from one class 
 *  -interface =  we can implements from multiple interface 
 * source = https://www.youtube.com/watch?v=qOzQbnDaMng
 */

interface parent1
{
    public function calc($a, $b);
}

interface parent2
{
    function sub($c, $d);
}

// drive clsss

class ChildClass implements parent1, parent2
{
    public function calc($a, $b)
    {
        echo $a + $b;
    }
    public function sub($c, $d)
    {
        echo $c + $d;
    }
}

$cal = new ChildClass();
$cal->calc(5,6);

echo $cal instanceof parent1;
