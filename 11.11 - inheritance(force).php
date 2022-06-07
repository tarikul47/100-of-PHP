<?php
/**
 * Better code by force useing inheritance
 */

// parent class
class Shape
{}

// child class
class Triangle extends Shape
{}
class Rectangle extends Shape
{}
class Square extends Shape
{}
class Student
{}

// Our claculates shapes class

class ShapeCalulate
{
    private $shapes;

    public function __construct()
    {
        $this->shapes = [];
    }

    public function addShape(Shape $shape)
    {
        array_push($this->shapes, $shape);
    }

    public function shapeCount()
    {
        return count($this->shapes);
    }
    
    public function getShapes()
    {
         print_r($this->shapes);
    }
}

$shape1 = new ShapeCalulate();
$shape1->addShape(new Triangle());
$shape1->addShape(new Rectangle());
$shape1->addShape(new Square());
$shape1->addShape(new Student()); //  it's not shape class 
echo $shape1->shapeCount();
echo $shape1->getShapes();