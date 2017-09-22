<?php
/**
 * Created by PhpStorm.
 * User: PT
 * Date: 9/22/2017
 * Time: 2:01 AM
 */
updateObjectOriented();
updatePDO();
updateProcedural();



function updateObjectOriented(){
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

    $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully </br>";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
function updatePDO(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testPDODB";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        // execute the query
        $stmt->execute();

        // echo a message to say the UPDATE succeeded
        echo $stmt->rowCount() . " records UPDATED successfully </br>";
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;

}
function updateProcedural(){
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

    $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully </br> ";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
