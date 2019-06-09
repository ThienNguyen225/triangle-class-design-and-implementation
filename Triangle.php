<?php
include_once "Shape.php";

class Triangle extends Shape
{
public $side1 = 1;
public $side2 = 1;
public $side3 = 1;
public $color;

public function __construct($name = NULL, $side1 = NULL, $side2 = NULL, $side3 = NULL, $color = NULL)
{
    parent::__construct($name);
    $this->side1 = $side1;
    $this->side2 = $side2;
    $this->side3 = $side3;
    $this->color = $color;
}
public function setSide1($side1){
    $this->side1 = $side1;
}

public function getSide1(){
    return $this->side1;
}

public function setSide2($side2){
    $this->side2 = $side2;
}

public function getSide2(){
    return $this->side2;
}

public function setSide3($side3){
    $this->side3 = $side3;
}

public function getSide3(){
    return $this->side3;
}

public function getAcreage(){
    return (pow((($this->side1 + $this->side2 + $this->side3)
            * ($this->side1 + $this->side2 - $this->side3)
            * ($this->side2 + $this->side3 - $this->side1)
            * ($this->side3 + $this->side1 - $this->side2)), 0.5)) / 4;
}

public function getPerimeter(){
    return $this->side1 + $this->side2 + $this->side3;
}

public function toString(){
    echo "Name of Triangle is: " . $this->name . "<br>";
    echo "Color of Triangle is: " . $this->color . "<br>" . "<br>";
    echo "Area of Triangle is: " . $this->getAcreage() . "<br>" . "<br>";
    echo "Perimeter of Triangle is: " . $this->getPerimeter() . "<br>" . "<br>";
}
}