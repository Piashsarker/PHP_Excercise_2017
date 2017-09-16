<?php
/**
 * Created by PhpStorm.
 * User: PT
 * Date: 9/16/2017
 * Time: 4:44 AM
 */


$fileName = "demo_text.txt";
readFileUsingCharacter($fileName);
readFileUsingLine($fileName);
$newFile = "new_text.txt";
/** Create Flie if not exist on first call  */
createAndWriteFile($newFile,"Full Name : Piash Sarker");
readFileUsingLine($newFile);
/** Replace the existing file with new text , past text will be erased  */
createAndWriteFile($newFile,"ID : 131-35-422");
readFileUsingLine($newFile);





function readFileUsingLine($fileName){

    $myfile = fopen($fileName, "r") or die("Unable to open file!");
    echo "</br> Read First Line : </br> ";
    echo fgets($myfile);
    echo "</br> Read Line Until Reach EOF </br> ";
// Output one line until end-of-file
    while(!feof($myfile)) {
        echo fgets($myfile) . "<br>";
    }


    fclose($myfile);

}
function readFileUsingCharacter($fileName){
    $myfile = fopen($fileName, "r") or die("Unable to open file!");
    echo "</br> Read First Line : </br> ";
    echo fgets($myfile);
    echo "</br> Read Line Until Reach EOF </br> ";
// Output one line until end-of-file
    while(!feof($myfile)) {
        echo fgets($myfile) . "<br>";
    }

}

function createAndWriteFile($fileName , $text){
    $myfile = fopen($fileName, "w") or die("Unable to open file!");
    $txt = " $text \n";
    fwrite($myfile, $txt);
    $txt = " $text \n";
    fwrite($myfile, $txt);
    fclose($myfile);
}