<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo " Session Data Retrive Example  </br> ";

echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";

echo "</br> ";
print_r($_SESSION);

echo "</br> Overwrite Session Example </br> ";

$_SESSION['favcolor'] = "yelow";
print_r($_SESSION);

echo "</br> Destroy a Session </br> ";

// remove all session variables
session_unset();

// destroy the session
session_destroy();
print_r($_SESSION);

?>



</body>
</html>