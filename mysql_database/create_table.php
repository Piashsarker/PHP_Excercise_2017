<?php
/**
 * Created by PhpStorm.
 * User: PT
 * Date: 9/17/2017
 * Time: 12:00 AM
 */

// Create Using Object Oriented Style

createTableGuestUsingObjectOriented();
createTableGuestUsingProcedural();
createTableGuestUsingPDO();




function createTableGuestUsingObjectOriented(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testDB";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

// sql to create table
    $sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

    if ($conn->query($sql) === TRUE) {
        echo "</br> Table MyGuests created successfully";
    } else {
        echo "</br> Error creating table: " . $conn->error;
    }

    $conn->close();
}
function createTableGuestUsingProcedural(){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testProceduralDB";

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

// sql to create table
    $sql = "CREATE TABLE MyGuests (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP
  )";

    if (mysqli_query($conn, $sql)) {
        echo "</br> Table MyGuests created successfully";
    } else {
        echo "</br> Error creating table: " . mysqli_error($conn);
    }

    mysqli_close($conn);

}
function createTableGuestUsingPDO(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testPDODB";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // sql to create table
        $sql = "CREATE TABLE MyGuests (
         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
         firstname VARCHAR(30) NOT NULL,
         lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";

        // use exec() because no results are returned
        $conn->exec($sql);
        echo "</br> Table MyGuests created successfully";
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;

}

