# Shapes
Test package to calculating the area and perimeter of simple geometric shapes

# Install
>$ composer require dixmod/shapes

# Use

```php
include 'vendor/autoload.php';

use Dixmod\Shapes\{
    Circle,
    Rectangle,
    Square,
    Triangle
};

$circle = new Circle(
    10 // radius
);
echo $circle->getArea() . PHP_EOL;
echo $circle->getPerimeter() . PHP_EOL;

$rectangle = new Rectangle(
    12, // length side A
    10  // length side B
);
echo $rectangle->getArea() . PHP_EOL;
echo $rectangle->getPerimeter() . PHP_EOL;

$square = new Square(
    12 // length side
);
echo $square->getArea() . PHP_EOL;
echo $square->getPerimeter() . PHP_EOL;

$triangle = new Triangle(
    15, // length side A
    4,  // length side B
    4   // length side C
);
echo $triangle->getArea() . PHP_EOL;
echo $triangle->getPerimeter() . PHP_EOL;
```

# Run tests
>$ phpunit --bootstrap vendor/autoload.php tests/TestShapes.php