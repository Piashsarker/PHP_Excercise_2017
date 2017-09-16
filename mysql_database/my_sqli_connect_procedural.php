<?php
/**
 * Created by PhpStorm.
 * User: PT
 * Date: 9/16/2017
 * Time: 11:34 PM
 */

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Connected successfully";
}

// Create database
$sql = "CREATE DATABASE testProceduralDB";
if (mysqli_query($conn, $sql)) {
    echo "</br>Database created successfully";
} else {
    echo "</br>Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);

