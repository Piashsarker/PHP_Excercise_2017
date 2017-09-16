<?php
/**
 * Created by PhpStorm.
 * User: PT
 * Date: 9/16/2017
 * Time: 5:43 PM
 */


$fileName = "welcome.txt";
checkfileExist($fileName);

function checkfileExist($fileName){
    if(!file_exists($fileName)) {
        die("File not found");
    } else {
        $file=fopen("welcome.txt","r");
        echo "</br>  File found" ;
    }
}