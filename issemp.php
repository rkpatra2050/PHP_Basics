<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="issemp.php" method="post">

    <label>Username</label>    
    <input type="text" name="username"><br>
    <br>
    <label >Password</label>
    <input type="password" name="password"><br>
    <input type="submit" name="login" Value="login">
    </form>
</body>
</html>



<?php
// foreach($_POST as $key => $value){
//     echo "{$key}={$value}. <br>";
// }

if(isset($_POST["login"])){
    $username=$_POST["username"];
    $password=$_POST["password"];

    if(empty($username)){
        echo "username is missing";
    }
    else{
        echo $username;
    }
}


?>