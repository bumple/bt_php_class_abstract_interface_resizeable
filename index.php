<?php
include_once 'vendor/autoload.php';

use src\Circle;
use src\Cylinder;
use src\Rectangle;
use src\Square;

$circle = new Circle('hinh tron', 3);
$cylinder = new Cylinder('hinh tru', 4, 3);
$rectangle = new Rectangle('hinh chu nhat', 2, 2);
$square = new Square('hinh vuong', 2);

echo '====> Circle: ' . '<br>';
echo $circle->radius.'<br>';
echo $circle->calculatePerimeter().'<br>';
echo $circle->calculateArea().'<br>';
$circle->resize(100);
echo $circle->calculatePerimeter().'<br>';
echo $circle->calculateArea().'<br>';

echo '====> Rectangle: ' . '<br>';
echo 'width '.$rectangle->width.'<br>';
echo 'height '.$rectangle->height.'<br>';
echo 'peri '.$rectangle->calculatePerimeter().'<br>';
echo 'area '.$rectangle->calculateArea().'<br>';
$rectangle->resize(50);
echo ' sau khi resize'.'<br>';
echo 'width '.$rectangle->width.'<br>';
echo 'height '.$rectangle->height.'<br>';
echo 'peri '.$rectangle->calculatePerimeter().'<br>';
echo 'area '.$rectangle->calculateArea().'<br>'.'<hr>';
//----------------------------------

echo '====> square: ' . '<br>';
echo 'width '.$square->width.'<br>';

echo 'peri '.$square->calculatePerimeter().'<br>';
echo 'area '.$square->calculateArea().'<br>';
$square->resize(100);
echo ' sau khi resize'.'<br>';
echo 'width '.$square->width.'<br>';
echo 'peri '.$square->calculatePerimeter().'<br>';
echo 'area '.$square->calculateArea().'<br>';





