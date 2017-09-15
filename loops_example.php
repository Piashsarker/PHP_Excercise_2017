<?php
/**
 * Created by PhpStorm.
 * User: PT
 * Date: 9/16/2017
 * Time: 1:15 AM
 */


 echo "</br>";
 whileExample() ;
 echo "</br>";
 doWhileExmaple() ;
 echo "</br>";
 doWhileTestingExample();
 echo "</br>" ;
 forEachArrayExample() ;





function whileExample(){
    echo " While Loop Example </br> ";
    $x = 1;
    while($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }

}

function doWhileExmaple(){
    echo  " Do While Loop Example </br>";
    // Do While Example in php
    $y = 1;
    do {
        echo "The number is: $y <br>";
        $y++;
    } while ($y <= 5);

}

function doWhileTestingExample(){
    // Do done the work first as other programming language
    echo " do While Testing Example </br>";
    $z = 6;

    do {
        echo "The number is: $z <br>";
        $z++;
    } while ($z <= 5);

}

function forEachArrayExample(){
    echo "For Each Loop Example </br>";

    $colors = array("red", "green", "blue", "yellow");
    $position =0 ;
    foreach ($colors as $value) {
        echo "$value <br>";
        echo "$position";
        $position ++;
    }
}





