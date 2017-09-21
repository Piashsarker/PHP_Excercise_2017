<?php
/**
 * Created by PhpStorm.
 * User: piashsarker
 * Date: 9/21/17
 * Time: 11:38 AM
 */


deleteMySQLIObjectOriented();
deleteProcedural();
deletePDO() ;

function deleteMySQLIObjectOriented(){
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

// sql to delete a record
    $sql = "DELETE FROM MyGuests WHERE id=3";

    if ($conn->query($sql) === TRUE) {
        echo "</br> Record deleted successfully";
    } else {
        echo "</br> Error deleting record: " . $conn->error;
    }

    $conn->close();
}

function deleteProcedural(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testProceduralDB";

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
    if (!$conn) {
        die("</br> Connection failed: " . mysqli_connect_error());
    }

// sql to delete a record
    $sql = "DELETE FROM MyGuests WHERE id=3";

    if (mysqli_query($conn, $sql)) {
        echo "</br> Record deleted successfully";
    } else {
        echo "</br> Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
function deletePDO(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testPDODB";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // sql to delete a record
        $sql = "DELETE FROM MyGuests WHERE id=3";

        // use exec() because no results are returned
        $conn->exec($sql);
        echo "</br> Record deleted successfully";
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}
