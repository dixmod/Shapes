include 'src/Circle.php';
include 'src/Square.php';
include 'src/Triangle.php';

$circle = new \Shape\Circle(12);
echo $circle->getArea() . PHP_EOL;
echo $circle->getPerimeter() . PHP_EOL;

$square = new \Shape\Square(12);
echo $square->getArea() . PHP_EOL;
echo $square->getPerimeter() . PHP_EOL;

$triangle = new \Shape\Triangle(15, 4, 4);
//echo $triangle->getHeight();
echo $triangle->getArea() . PHP_EOL;
echo $triangle->getPerimeter() . PHP_EOL;

