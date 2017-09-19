<?php
/**
 * Created by PhpStorm.
 * User: PT
 * Date: 9/20/2017
 * Time: 12:06 AM
 */

 insertMultipleDataObjectOriented();
 insertMultipleDataPDO() ;
 insertMultipleDataProcedural() ;

 function insertMultipleDataObjectOriented(){
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
            VALUES ('John', 'Doe', 'john@example.com');";
            $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
            VALUES ('Mary', 'Moe', 'mary@example.com');";
            $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
            VALUES ('Julie', 'Dooley', 'julie@example.com')";

        if ($conn->multi_query($sql) === TRUE) {
            echo "</br>New records created successfully";
        } else {
            echo "</br>Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
 }

 function insertMultipleDataPDO(){

     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "testPDODB";

     try {
         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
         // set the PDO error mode to exception
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         // begin the transaction
         $conn->beginTransaction();
         // our SQL statements
         $conn->exec("INSERT INTO MyGuests (firstname, lastname, email) 
    VALUES ('John', 'Doe', 'john@example.com')");
         $conn->exec("INSERT INTO MyGuests (firstname, lastname, email) 
    VALUES ('Mary', 'Moe', 'mary@example.com')");
         $conn->exec("INSERT INTO MyGuests (firstname, lastname, email) 
    VALUES ('Julie', 'Dooley', 'julie@example.com')");

         // commit the transaction
         $conn->commit();
         echo "</br> New records created successfully";
     }
     catch(PDOException $e)
     {
         // roll back the transaction if something failed
         $conn->rollback();
         echo "</br>Error: " . $e->getMessage();
     }

     $conn = null;

 }
 function insertMultipleDataProcedural(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testProceduralDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("</br>Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if (mysqli_multi_query($conn, $sql)) {
    echo "</br>New records created successfully";
} else {
    echo "</br>Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
 }