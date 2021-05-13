<?php

namespace src;
include_once '../vendor/autoload.php';


class Circle extends Shape implements Resizeable
{
    public mixed $radius;


    public function __construct($name, mixed $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter()
    {
        return pi() * $this->radius * 2;
    }

    public function resize($value)
    {
        $this->radius = $this->radius + $value * $this->radius / 100;
        // TODO: Implement resize() method.
    }
}

