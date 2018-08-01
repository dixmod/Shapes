# Shapes
Test package to calculating the area and perimeter of simple geometric shapes

$circle = new \Shapes\Circle(12);
echo $circle->getArea() . PHP_EOL;
echo $circle->getPerimeter() . PHP_EOL;

$square = new \Shapes\Square(12);
echo $square->getArea() . PHP_EOL;
echo $square->getPerimeter() . PHP_EOL;

$triangle = new \Shapes\Triangle(15, 4, 4);
echo $triangle->getArea() . PHP_EOL;
echo $triangle->getPerimeter() . PHP_EOL;