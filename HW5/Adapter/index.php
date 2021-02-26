<?php
// Adapter

spl_autoload_register(function ($classname) {
    require_once($classname . '.php');
});
$circle = new Circle();
echo $circle->circleArea(10) . PHP_EOL;

$square = new Square();
echo $square->squareArea(10) . PHP_EOL;


$circleAdapter = new CircleAdapter(new CircleAreaLib());
echo $circleAdapter->circleArea(10) . PHP_EOL; 

$squareAdapter = new SquareAdapter(new SquareAreaLib());
echo $squareAdapter->squareArea(10) . PHP_EOL; 