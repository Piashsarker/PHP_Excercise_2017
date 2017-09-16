<?php
/**
 * Created by PhpStorm.
 * User: PT
 * Date: 9/16/2017
 * Time: 5:24 PM
 */


$int = 122;
$min = 1;
$max = 200;
validateIntegerWithinRange($int , $min , $max);

$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
validateIPv6Address($ip);

$url = "https://www.w3schools.com";
validateURL($url);

$str = "<h1>Hello WorldÆØÅ!</h1>";

removeASCIFromString($str);





function validateIntegerWithinRange($int , $min , $max){
    if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
        echo("</br> Variable value is not within the legal range ".$int);
    } else {
        echo("</br> Variable value is within the legal range ".$int);
    }
}

function validateIPv6Address($ip){
    if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
        echo("</br> $ip is a valid IPv6 address");
    } else {
        echo("</br> $ip is not a valid IPv6 address");
    }
}

function validateURL($url){

    if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
        echo("</br> $url is a valid URL");
    } else {
        echo("</br> $url is not a valid URL");
    }
}

function removeASCIFromString($str){

    $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    echo "</br> ".$newstr;
}
