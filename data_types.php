<?php
$x = 5985;
var_dump($x);
$y = 10.365;
var_dump($y);
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

class Car {
    function Car() {
        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;

$y = "Hello world!";
$y = null;
echo "</br>";
var_dump($y);