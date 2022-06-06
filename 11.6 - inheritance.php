<?php

class Animals {
    public $name;
    public $title;

    function __construct($name = ''){
        $this->name = $name;
        $this->eat();
    }

    protected function addTitle($title){
        $this->name = $title.' '.$this->name;
    }

    function eat(){
        return $this->name." ". "is eating ( from parent) \n";
    }

    protected function greet(){}



}

class Human extends Animals {

    function addTitle($title){
        $this->name = $title.' '.$this->name;
    }

    function greet(){
        return "Hi from $this->name \n";
    }
}

class Cat extends Animals{
    function greet(){
        return "Mewo menow !!!!\n";
    }
}

$raju = new Human('Raju');
$raju->addTitle('Mr.');
$cat1 = new Cat('Tom');
echo $raju-> greet();
echo $raju->eat();
echo $cat1->greet();
