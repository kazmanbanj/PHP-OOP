<?php

abstract class Shape {
    protected $color;
    protected $length = 4;

    public function __construct($color = 'red')
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    abstract public function getArea();
}

class Square extends Shape {
    protected $length = 5;

    public function getArea()
    {
        return pow($this->length, 2);
    }
}

class Triangle extends Shape {
    protected $base = 4;
    protected $height = 7;
    public function getArea()
    {
        return .5 * $this->base * $this->height;
    }
}

class Circle extends Shape
{
    protected $radius = 5;
    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape
{
    protected $length = 5;
    protected $breadth = 4;

    public function getArea()
    {
        return $this->breadth * $this->length;
    }
}

// new Square('red');
// echo (new Triangle)->getArea();
// echo (new Triangle('blue'))->getColor();
// echo (new Triangle('blue'))->getArea();
// var_dump((new Rectangle)->getArea());
// $rect = new Rectangle;
// echo $rect('blue')->getColor();

$circle = new Circle('blue');
// echo $circle->getArea();
echo $circle->getColor();

// var_dump((new Square)->getArea());
// echo (new Triangle)->getArea();
