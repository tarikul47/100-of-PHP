<?php
class ParentClass
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
        $this->sayHi();
    }

    public function sayHi()
    {
        echo "Hi from parent class $this->name";
    }
}

class ChildClass extends ParentClass
{
    public function sayHi()
    {
        parent::sayHi();  // parent function call by parent:: 
        echo "Hello";
    }
}

$cc = new ChildClass('Child');
