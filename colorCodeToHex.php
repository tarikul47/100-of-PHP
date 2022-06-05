<?php
class RGB {

    private $color;
    private $red;
    private $green;
    private $blue;

    function __construct($color){
        $this->color = ltrim($color,'#');
        echo $this->color;
        $this->parseColor();
    }

    function getColor(){
        return $this->color;
    }
    
    function setColor($color){
        $this->color = ltrim($color,'#');
    }

    private function parseColor(){
        list($this->red, $this->green,$this->blue) = sscanf($this->color,'%2x%2x%2x');
    }

    function GetHexColor(){
        printf("Red: %d \nGreen: %d \nBlue: %d", $this->red, $this->green, $this->blue);
    }

    function getRed(){
        return $this->red;
    } 
    
    function getGreen(){
        return $this->green;
    } 
    
    function getBlue(){
        return $this->blue;
    }


    
}

$myColor = new RGB('#ffef00');
echo "\n";
//echo $myColor->getRed();
//echo $myColor->getGreen();

$myColor->GetHexColor();

