<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="somenew.php" method="post">
    Username:<br>
    <input type="text" name="username" ><br>
    Age:<br>
    <input type="text" name="age" ><br>
    Email:<br>
    <input type="email" name="email"><br>
    <input type="submit" name="Login" value="Login">

    </form>
</body>
</html>

<?php
if(isset($_POST["Login"])){
$username=filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
$aGE=filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
$Email=filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

echo "Hello {$username} <BR>";
echo $aGE;
echo $Email;
}


?>