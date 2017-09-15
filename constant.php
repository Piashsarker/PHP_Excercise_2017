<?php
/**
 * Created by PhpStorm.
 * User: PT
 * Date: 9/15/2017
 * Time: 9:39 PM
 */
define("GREETING", "Welcome to W3Schools.com! </br>");
echo GREETING;
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
function myTest() {
    echo GREETING;
}

myTest();