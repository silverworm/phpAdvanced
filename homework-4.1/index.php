<?php

include '../vendor/autoload.php';

use PhpAdvanced\MovableCar;

$testCar = new MovableCar();

echo $testCar->start();
echo $testCar->up()."<br>";
echo $testCar->up(20)."<br>";
echo $testCar->up(220)."<br>";
echo $testCar->up(1)."<br>";

echo $testCar->up(1)."<br>";
echo $testCar->down(20)."<br>";
echo $testCar->down(200)."<br>";
echo $testCar->down(1)."<br>";

echo $testCar->stop()."<br>";
echo $testCar->up(1)."<br>";
echo $testCar->down(1)."<br>";


