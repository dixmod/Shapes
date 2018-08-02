# Shapes
Test package to calculating the area and perimeter of simple geometric shapes

# Install
>$ composer require dixmod/shapes

# Use

```<?php

include 'vendor/autoload.php';

use Dixmod\Shapes\Circle;
use Dixmod\Shapes\Square;
use Dixmod\Shapes\Triangle;

$circle = new Circle(12);
echo $circle->getArea() . PHP_EOL;
echo $circle->getPerimeter() . PHP_EOL;

$square = new Square(12);
echo $square->getArea() . PHP_EOL;
echo $square->getPerimeter() . PHP_EOL;

$triangle = new Triangle(15, 4, 4);
echo $triangle->getArea() . PHP_EOL;
echo $triangle->getPerimeter() . PHP_EOL;`