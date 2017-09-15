<?php
/**
 * Created by PhpStorm.
 * User: PT
 * Date: 9/15/2017
 * Time: 10:19 PM
 */

/** @var $x */

$x = array("a" => "red", "b" => "green", "c"=>"pink");
$y = array("c" => "blue", "d" => "yellow");

print_r($x + $y); // union of $x and $y

$array1 = array("a" => "red", "b" => "green");
$array2 = array("a" => "red", "b" => "green");

var_dump($array1== $array2);

$array3 = array("a" => "red", "b" => "green");
$array4 = array("c" => "blue", "d" => "yellow");

var_dump($array3 === $array4);

var_dump( $array1!=$array2);
var_dump($array1<> $array2);
var_dump($array1 !== $array2);
