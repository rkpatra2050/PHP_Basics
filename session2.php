<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>This is the Login Page </h2>
    <a href="session.php">This is Going To Home Page</a><br>
</body>
</html>
<?php
$_SESSION["username"]= "Rkworld";
$_SESSION["password"]= "pikun@123";
echo $_SESSION["username"]."<br>";
echo $_SESSION["password"]."<br>";
?>