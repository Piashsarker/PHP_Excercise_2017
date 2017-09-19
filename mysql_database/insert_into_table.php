<?php
/**
 * Created by PhpStorm.
 * User: PT
 * Date: 9/17/2017
 * Time: 12:28 AM
 */

insertIntoGuestTableUsingObjectOriented();
insertIntoGuestTableUsingProcedural();
insertIntoGuestTableUsingPDO();

function insertIntoGuestTableUsingObjectOriented(){
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

    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Piash', 'Sarker', 'piash@example.com')";

    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id ;
        echo "</br> New record created successfully id ".$last_id;
    } else {
        echo "</br> Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

function insertIntoGuestTableUsingProcedural(){
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

    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Piash ', 'Sarker', 'piash@example.com')";

    if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn);
        echo "</br> New record created successfully . Id ".$last_id;

    } else {
        echo "</br> Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

function insertIntoGuestTableUsingPDO(){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testPDODB";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
        // use exec() because no results are returned
        $conn->exec($sql);
        $last_id = $conn-> lastInsertId();
        echo "</br> New record created successfully id ".$last_id;
    }
    catch(PDOException $e)
    {
        echo "</br> ". $sql . "<br>" . $e->getMessage();
    }

    $conn = null;

}