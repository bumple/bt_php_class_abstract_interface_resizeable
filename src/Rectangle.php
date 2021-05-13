<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:16
 */

namespace src;
class Rectangle extends Shape implements Resizeable
{
    public mixed $width;
    public mixed $height;

    public function __construct($name, mixed $width, mixed $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function resize($value)
    {
        $this->width = $this->width + $this->width * $value / 100;
        $this->height = $this->height + $this->height * $value / 100;
        // TODO: Implement resize() method.
    }

    public function calculateArea()
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter()
    {
        return ($this->height + $this->width) * 2;
    }
}