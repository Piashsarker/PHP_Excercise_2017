<?php
/**
 * Created by PhpStorm.
 * User: PT
 * Date: 9/16/2017
 * Time: 1:34 AM
 */

writeMsg();

add(10, 30 );
substract(40 , 30);
familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

familyNameWithYear("Hege", "1975");
familyNameWithYear("Stale", "1978");
familyNameWithYear("Kai Jim", "1983");

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);

echo "<br> 5 + 10 = " . sum(5, 10) ;
echo "<br> 7 + 13 = " . sum(7, 13)  ;
echo "<br> 2 + 4 = " . sum(2, 4);

function writeMsg() {
    echo "</br>Hello world!";
}

 // call the function

function add($x , $y){
    echo "</br> Add ".($x+$y);
}

function substract($x  , $y){
    echo "</br>  Subtract: ".($x-$y);
}

function familyName($fname) {
    echo "<br> $fname Refsnes.";
}

function familyNameWithYear($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
}

function setHeight($minheight = 50) {
    echo "</br> The height is : $minheight ";
}

function sum($x, $y) {
    $z = $x + $y;
    return $z;
}






