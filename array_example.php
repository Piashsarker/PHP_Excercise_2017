<?php
/**
 * Created by PhpStorm.
 * User: PT
 * Date: 9/16/2017
 * Time: 1:47 AM
 */

echo "</br> Index Array Example";
$cars = array("Volvo", "BMW", "Toyota");
echo "</br> I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo count($cars);
$person = array("Piash","Rabbi", "Sumon");
printArray($person);

echo "</br> Associative Array Example";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "</br> Peter is " . $age['Peter'] . " years old.";
printAssociativeArray($age);

echo "</br> Print Asscending Order Index Array=> ";
sort($cars);
printArray($cars);
echo "</br> Print Descending Order Index Array=> ";
rsort($cars);
printArray($cars);
echo "</br> Print Associative Array Ascending Order By Value=> ";
asort($age);
printAssociativeArray($age);
echo "</br> Print Associative Array Ascending Order By KEY=> ";
ksort($age) ;
printAssociativeArray($age);
echo "</br> Print Associative Array descending Order By Value => ";
arsort($age);
printAssociativeArray($age);
echo "</br> Print Associative Array descending Order By Key => ";
krsort($age);
printAssociativeArray($age);





function printArray($sampleArray){
    foreach ($sampleArray as $value){
        echo "</br> $value";
    }


}



function printAssociativeArray($sampleArray){
    echo "</br>";
    var_dump($sampleArray);

    foreach ($sampleArray as $itemKey => $item) {
        echo "</br> Key = $itemKey and Value =   $item";

    }
}


