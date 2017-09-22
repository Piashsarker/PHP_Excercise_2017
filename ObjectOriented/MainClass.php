<?php
/**
 * Created by PhpStorm.
 * User: PT
 * Date: 9/22/2017
 * Time: 2:31 AM
 */

/** For making a object of a PHP File Class , You need to require the file once than you can make object and access it */

require_once('Books.php');
require_once('Car.php');
require_once ('Novel.php');
require_once ('Report.php');
require_once('StaticExample.php');

const MY_RESULT = 10 ;

$physics = new Books();
$physics->setPrice(100);
$physics->setTitle("Physics Books ");

echo "</br> " . $physics->getTitle() . " " . $physics->getPrice();

$car = new Car("33","DHAKA-233");

echo "</br> " . $car->getCarNumber()." ".$car->getLicenseNumber();
echo "</br> Inheritance Example </br> ";

$novel = new Novel();

$novel->setPublisher(" Shib Khera ");
$novel->setTitle("You can win");
$novel->setPrice(330);

echo "</br> Novel Name: ".$novel->getTitle()." Publisher: ".$novel->getPublisher()." Price: ".$novel->getPrice();

echo "</br> Interface Example </br> ";
$report = new Report();
$report->sendMail();

echo "</br> MY Result Constant ".MY_RESULT;

echo "</br> Static Example </br>";

echo "</br> ".StaticExample::$staticValue;

$staticValue = new StaticExample();
echo "</br> Static value by method ".$staticValue->getStaticValue();



