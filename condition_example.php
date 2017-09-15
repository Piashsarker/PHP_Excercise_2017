<?php
/**
 * Created by PhpStorm.
 * User: PT
 * Date: 9/16/2017
 * Time: 12:46 AM
 */


$t = date("H");
$value1 = 20 ;

if ($t < "20") {
    echo "Have a good day!";
}
else{
    echo  "Good Night";
}

if($value1>10){
    echo  "</br> Greater than 10";
}

echo "/<br>";

// Switch - Case Example Code .
$favcolor = "red";
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}