
<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <td>Filter Name</td>
        <td>Filter ID</td>
    </tr>
    <?php
    foreach (filter_list() as $id =>$filter) {
        echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
    }
    ?>
</table>


<?php


//The following example uses the filter_var() function to remove all HTML tags from a string
$str = "<h1>Hello World!</h1>";
validateString($str);

// Validate A Integer
$int = 100;
validateInteger($int);

// To Recover 0 int problem , use this in production code .
$int = 0;
validateIntegerWithZero($int);

// Validate an IP
$ip = "127.0.0.1";
validateIP($ip);

// Below Code Validate an email address .
$email = "john.doe@example.com";
validateEmail($email);

//Below code validate and Snitize and URL
$url = "https://www.w3schools.com";
validateURL($url);





function validateString($str){
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    echo "</br>". $newstr;

}
function validateIP($ip){
    if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
        echo("</br> $ip is a valid IP address");
    } else {
        echo("</br> $ip is not a valid IP address");
    }
}
function validateEmail($email){

// Remove all illegal characters from email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo("</br> $email is a valid email address");
    } else {
        echo("</br> $email is not a valid email address");
    }

}
function validateURL($url){
// Remove all illegal characters from a url
    $url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
    if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
        echo("</br> $url is a valid URL");
    } else {
        echo("</br> $url is not a valid URL");
    }

}
function validateInteger($int){
    if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo(" </br> Integer is valid ".$int);
    } else {
        echo("</br> Integer is not valid ".$int);
    }
}
function validateIntegerWithZero($int){

    if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo("</br> Integer is valid ".$int);
    } else {
        echo("</br> Integer is not valid ".$int);
    }

}




?>

</body>
</html>