<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:16
 */
namespace src;

class Square extends Rectangle implements Resizeable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }
    public function resize($value)
    {
        $this->width = $this->width + $this->width * $value / 100;
        // TODO: Implement resize() method.
    }
}