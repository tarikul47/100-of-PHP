<?php
/**
 * Many interface we can include in a class but interface can't it. 
 * interface can't include varaibles but only keep method 
 * not need access type modifieer [protectet, private]
 * public method only suport 
 * Interface may not need classs interface just it can implement in another class
 * inheritance vs interface
 *  - inheritance = we can inherite from one class
 *  -interface =  we can implements from multiple interface
 * source = https://www.youtube.com/watch?v=qOzQbnDaMng
 * 
 * For example: 
 *  - Here we have two interface for adding and substruction method 
 *  - the two method we can implement in our Calulation class 
 */

interface Add
{
    public function addCalc($param1, $param2);
}

interface Sub
{
    function subCal($param3, $param4);
}

// drive clsss

class Calulation implements Add, Sub
{
    public function addCalc($a, $b)
    {
        echo $a + $b;
    }
    public function subCal($c, $d)
    {
        echo $c + $d;
    }
}


$cal = new Calulation();
$cal->addCalc(5, 6);

//echo $cal instanceof parent1;
