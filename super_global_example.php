<?php
/**
 * Created by PhpStorm.
 * User: PT
 * Date: 9/16/2017
 * Time: 2:14 AM
 */

$x = 75;
$y = 25;

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">

    ID: <input type="text" name="fid">
    <input type="submit">
</form>

<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    $id = $_REQUEST['fid'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
    echo "</br> ";
    if (empty($id)) {
        echo "Id is empty";
    } else {
        echo $id;
    }

}
?>


</body>
</html>
