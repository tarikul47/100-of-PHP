<?php
/**
 * abstruct class has at least on abstrut method
 * child class must use the abstruct methos
 * 
 * example: Shape class define abstract and has two abstruct method 
 * Rectangle and triangle child class use the parent abstruct method 
 * 
 * if you don't use then you are getting fatal error. 
 * 
 * 
 */

abstract class Shape {
    protected $name;
    protected $area;

    public function __construct($name){
        $this->name = $name;
        $this->calculateArea();;
    }

    abstract public function getArea();
    abstract public function calculateArea();
}

class Triangle extends Shape{
    private $a, $b, $c;

    public function __construct($a,$b,$c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct('Triangle');
    }

    public function getArea(){
        echo "This {$this->name}'s area is {$this->area}\n";
    }

    public function calculateArea(){
        $perimeter = ($this->a + $this->b + $this->c)/2;
        $this->area =  sqrt($perimeter * ($perimeter - $this->a) * ($perimeter - $this->b) * ($perimeter - $this->c ));
    }
}


class Rectangle extends Shape{
    private $a, $b;

    public function __construct($a,$b){
        $this->a = $a;
        $this->b = $b;
        parent::__construct('Rectangle');
    }

    public function getArea(){
        echo "This {$this->name}'s area is {$this->area}\n";
    }

    public function calculateArea(){
        $this->area =  $this->a * $this->b;
    }

}

$triangle = new Triangle(5,6,7);
$rectangle = new Rectangle(5,6,7);
$rectangle->getArea();
$triangle->getArea();

/**
 * This Rectangle's area is 30
 * This Triangle's area is 14.696938456699

 */
