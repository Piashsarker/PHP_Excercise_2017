<?php
$x = 5; // global scope
$j = 10 ;
$k = 20 ;
function myTest1() {
    // using x inside this function will generate an error
   // echo "<p>Variable x inside function is: $x</p>";
}
myTest1();

echo "<p>Variable x outside function is: $x</p>";

function myTest2() {
    $y = 5; // local scope
    echo "<p>Variable x inside function is: $y</p>";
}
myTest2();

// using y outside the function will generate an error
echo "<p>Variable Y outside function is: $y</p>";

function globalTest(){
    global  $x ;
    $y = $x+10 ;
    echo "Global Variable in Method= $y";
}
globalTest();

function globalArrayTest(){
    $GLOBALS['x'] = $GLOBALS['j']+$GLOBALS['k'];
}
globalArrayTest();
echo "</br> Global Array Test Change Global x value to $x";


