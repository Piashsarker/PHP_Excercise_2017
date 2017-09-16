<?php
/**
 * Created by PhpStorm.
 * User: PT
 * Date: 9/16/2017
 * Time: 4:08 AM
 */
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");

echo "</br> &copy; 2010-". date("Y") ;
echo "</br> The time is " . date("h:i:s a");
date_default_timezone_set("America/New_York");
echo " </br> The America  time is " . date("h:i:s  a");

$d=mktime(11, 14, 54, 8, 12, 2014);
echo "</br> Created date is " . date("Y-m-d h:i:sa", $d);
$f=strtotime("10:30pm April 15 2014");
echo "</br> Created date is " . date("Y-m-d h:i:sa", $f);

$g=strtotime("tomorrow");
echo "</br>".date("Y-m-d h:i:sa", $g) . "<br>";

$h=strtotime("next Saturday");
echo "</br>".date("Y-m-d h:i:sa", $h) . "<br>";

$j=strtotime("+3 Months");
echo "</br>".date("Y-m-d h:i:sa", $j) . "<br>";

$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
    echo "</br>" .date("M d", $startdate) . "<br>";
    $startdate = strtotime("+1 week", $startdate);
}
$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "</br> There are " . $d2 ." days until 4th of July.";