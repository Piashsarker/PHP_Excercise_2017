<?php
/**
 * Created by PhpStorm.
 * User: PT
 * Date: 9/16/2017
 * Time: 4:33 PM
 */

 session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

</body>
</html>
