# Shapes
Test package to calculating the area and perimeter of simple geometric shapes

# Install
>$ composer require dixmod/shapes

# Use

```php
<<<<<<< HEAD

=======
>>>>>>> cff78f8e7a677849adb452969a24d8c655b19860
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
<<<<<<< HEAD
echo $triangle->getPerimeter() . PHP_EOL;
```

# Run tests
>$ phpunit --bootstrap vendor/autoload.php tests/TestShapes.php
=======
echo $triangle->getPerimeter() . PHP_EOL;`
>>>>>>> cff78f8e7a677849adb452969a24d8c655b19860
